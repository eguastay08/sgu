<?php

namespace App\Http\Controllers;

use App\Http\Controllers\WorksSpaceController;
use App\Jobs\CreateAccountLdap;
use App\Jobs\CreateEmail;
use App\Jobs\GenerateEmail;
use App\Jobs\GeneratePassword;
use App\Jobs\SendNewPassword;
use App\Mail\ConfirmMail;
use App\Mail\SendPasswordAccess;
use App\Mail\SendTokenResetPassword;
use App\Models\File;
use App\Models\Parroquia;
use App\Models\Role;
use App\Models\User;
use App\Models\User_role;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Str;
use Illuminate\Contracts\Encryption\DecryptException;

class UserController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $access_granted=Controller::validatePermissions($request->user()->id,'GET','/users');
        if($access_granted) {
            $users=array();
            $data = User::all(
                'cedula',
                'f_name',
                's_name',
                'f_surname',
                's_surname',
                'gender',
                'photography',
                'email',
                'email_inst'
            )->where('deleted', '!=', '0');

            foreach ($data as $d){
                $this->generateAvatarUrl($d);
            }

            return $this->response('false', Response::HTTP_OK, '200 OK', $data);
        }else{
            return $this->response(true,Response::HTTP_FORBIDDEN,'403 Forbidden' );
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_act=$request->user()->id;
        $access_granted=Controller::validatePermissions($user_act,'POST','/users');
        if($access_granted){
            $errors= User::verifyRequired($request);
            if($errors==null) {
                $data=[];
                $edit_permission=[
                    'cedula',
                    'f_name',
                    's_name',
                    'f_surname',
                    's_surname',
                    'gender',
                    'mobile',
                    'phone',
                    'date_of_birth',
                    'ethnicity',
                    'type_of_disability',
                    'percentage_of_disability',
                    'cod_conadis',
                    'civil_status',
                    'type_auth',
                    'email',
                    'email_inst',
                    'password',
                    'group'
                ];
                foreach ($edit_permission as $d){
                    if(isset($request->$d)){
                        $data[$d]=$request->$d;
                    }
                }
                $validate=\Validator::make($data,[
                    'cedula'    => 'unique:users',
                    'email'    => 'email|unique:users',
                    'email_inst' => 'email|unique:users',
                    "gender"=>"in:Masculino,Femenino,LGBT,Otro",
                    "ethnicity"=>"in:Afroecuatoriano/a,Blanco/a,Indigena,Mestizo/a,Montubio/a,Mulato/a,Negro/a,Otro",
                    "civil_status"=>"in:Casado/a,Soltero/a,Divorciado/a,Viudo/a,Unión de Hecho",
              ]);
                if ($validate->fails())
                {
                    return $this->response('true', Response::HTTP_BAD_REQUEST, '400 BAD REQUEST', $validate->errors());
                }
                if(!isset($data['type_auth'])){
                    $data['type_auth']='oidc';
                }
                $role=Role::where('name','=',$data['group'])->first();
                if(isset($role)){
                    return $this->save($data,$role,$request);
                }else{
                    $errors=['El grupo es incorrecto'];
                    return $this->response(true, Response::HTTP_BAD_REQUEST, '400 Bad Request',$errors);
                }
            }else {
                return $this->response(true, Response::HTTP_BAD_REQUEST, '400 Bad Request',$errors);
            }
        }else{
            return $this->response(true,Response::HTTP_FORBIDDEN,'403 Forbidden' );
        }
    }

    private function save($data,Role $role,Request $request){
        $passw=null;
        if(isset($data['password'])) {
            $passw = $data['password'];
            $data['password']=bcrypt($data['password']);
        }
        $user = User::create($data);
        $log="The user '".$request->user()->id."' create user '$user->id'";
        $this->log('info',$log,'api',$request->user());
        $data_role=[
            'id_user'=>$user->id,
            'cod_rol'=>$role->cod_rol
        ];
        User_role::create($data_role);
        $log="The user '".$request->user()->id."' added '$user->id' to the '$role->cod_rol' role";
        $this->log('info',$log,'api',$request->user());
        $user->createToken('LaravelAuthApp')->accessToken;
        if(!isset($data['email_inst'])){
            $log="The email generation job was created for user $user->id";
            $this->log('info',"$log",'cli',$request->user());
            GenerateEmail::dispatch($user,$role);
        }
        if(!isset($data['password'])&&isset($data['email_inst'])){
            $log="The password generation job was created for user $user->id";
            $this->log('info',"$log",'cli',$request->user());
            GeneratePassword::dispatch($user,$role);
        }
        if($passw!=null&&isset($data['email_inst'])){
            $log="The job was created to add the user '$user->id' to ldap ";
            $this->log('info',"$log",'cli',$request->user());
            CreateAccountLdap::dispatch($user,$passw,$role);
        }
        return $this->response(false, Response::HTTP_CREATED, '201 Created',$user);
    }

    public function import(Request $request){
            $user_act = $request->user()->id;
            $access_granted = Controller::validatePermissions($user_act, 'POST', '/users/import');
            if($access_granted){
                $errors=[];
                if($request->hasFile('file')) {
                    $file = $request->file('file');
                    $validate = \Validator::make(
                        array(
                            'file' => $file,
                        ),
                        array(
                            'file' => 'mimeType:text/plain'
                        )
                    );
                    //!$validate->fails()
                    if (true) {
                        $delimit=$request->delimit?$request->delimit:',';
                        $data=GeneralFunctions::csvToJson($file,$delimit);
                        $gender=[
                            'Masculino',
                            'Femeninos',
                            'LGBT',
                            'Otro'
                        ];
                        $ethnicity=[
                            'Afrodecendiente',
                            'Blanco/a',
                            'Indigena',
                            'Mestizo/a',
                            'Montubio/a',
                            'Mulato/a',
                            'Negro/a',
                            'Otro/a'
                        ];
                        $return=[];
                        foreach ($data as $key=> $d){
                            foreach ($d  as $key=>  $min){
                                $aux=mb_strtolower($min);
                                $aux2=explode(" ",$aux);
                                $na='';
                                foreach ($aux2 as $n){
                                    $na.=ucfirst($n)." ";
                                }
                                $d[$key]=trim($na);
                            }

                            $new_user= [
                                'cedula'=>isset($d['cedula'])?$d['cedula']:null,
                                'surname'=>isset($d['surname'])?$d['surname']:null,
                                'name'=>isset($d['name'])?$d['name']:null,
                                'email'=>isset($d['email'])?strtolower($d['email']):null,
                                'birthday'=>isset($d['birthday'])?$d['birthday']:null,
                                'nationality'=>isset($d['nationality'])?$d['nationality']:null,
                                'gender'=>isset($d['gender'])?$d['gender']:null,
                                'province'=>isset($d['province'])?$d['province']:null,
                                'canton'=>isset($d['canton'])?$d['canton']:null,
                                'parroquia'=>isset($d['parroquia'])?$d['parroquia']:null,
                                'email_inst'=>isset($d['email_inst'])?strtolower($d['email_inst']):null,
                                'password'=>isset($d['password'])?$d['password']:null,
                                'phone'=>isset($d['phone'])?$d['phone']:null,
                                'mobile'=>isset($d['mobile'])?$d['mobile']:null,
                                'ethnicity'=>isset($d['ethnicity'])?$d['ethnicity']:null,
                                'disability'=>isset($d['disability'])?$d['disability']:null,
                            ];

                            if($new_user['email_inst']==null){
                                unset($new_user['email_inst']);
                            }
                            if(isset($new_user['email'])&&empty($new_user['email'])){
                                unset($new_user['email']);
                            }
                            $new_user['group']=$request->group;
                            $validate=\Validator::make($new_user,[
                                'cedula'    => 'required|unique:users',
                                'email'    => 'email|unique:users',
                                'email_inst'    => 'email|unique:users',
                                'surname'    => 'required',
                                'name'    => 'required',
                                'group'=>'required'
                            ]);

                            if(!$validate->fails()){
                                $name=explode(' ',$new_user['name']);
                                $new_user['f_name']=$name[0];
                                unset($name[0]);
                                $new_user['s_name']='';
                                foreach ($name as $n) {
                                    $new_user['s_name'].="$n ";
                                }
                                $new_user['s_name']=trim($new_user['s_name']);
                                $surname=explode(' ',$new_user['surname']);
                                $new_user['s_surname']=end($surname);
                                array_pop($surname);
                                $new_user['f_surname']='';
                                foreach ($surname as $n) {
                                    $new_user['f_surname'].="$n ";
                                }
                                $new_user['f_surname']=trim($new_user['f_surname']);
                                $role=Role::where('name','=',$new_user['group'])->first();
                                if(isset($role)) {//
                                    if(!GeneralFunctions::inArray($ethnicity,$new_user['ethnicity'])){
                                        unset($new_user['ethnicity']);
                                    }
                                    if(!GeneralFunctions::inArray($gender,$new_user['gender'])){
                                        unset($new_user['gender']);
                                    }
                                        $this->save($new_user,$role,$request);
                                        $new_user['status']="Se registro";
                                }else{
                                    $new_user['status']="El grupo es incorrecto";
                                }
                            }else{
                                $new_user['status']=$validate->errors();
                            }
                            $return[]=$new_user;
                        }
                        return $return;
                    }else{
                        $errors[]='El archivo es incorrecto';
                        return $this->response('true', Response::HTTP_BAD_REQUEST, '400 BAD REQUEST', $errors);
                    }
                }else{
                    $errors[]='El archivo es incorrecto';
                    return $this->response('true', Response::HTTP_BAD_REQUEST, '400 BAD REQUEST', $errors);
                }
            }else{
                return $this->response(true,Response::HTTP_FORBIDDEN,'403 Forbidden' );
            }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    protected function existEmail($nick,$domain){
        $exist=false;
        $user=User::where('email_inst','=',"$nick@$domain")->first();
        if(!empty($user)){
           $exist=true;
       }else{
            $exist_gsuite=WorksSpaceController::emailExist("$nick@$domain");
            if($exist_gsuite){
                $exist=true;
            }
       }
        return $exist;
    }

    public function generatePassword(User $user,Role $role){
        $new_password=str::random(8);
        $dat_mail = [
            'name' => "$user->f_surname $user->s_surname $user->f_name $user->s_name",
            'email' => $user->email,
            'new_email'=>$user->email_inst,
            'password'=>$new_password
        ];
        $for = [
            ['name' => "$user->f_name $user->s_name $user->f_surname $user->s_surname",
                'email' => $user->email]
        ];
        $data=[
            'password'=>bcrypt($new_password)
        ];
        $user->update($data);
        LdapController::updatePassword($user->cedula,$new_password);
        SendNewPassword::dispatch($for,$dat_mail);
        $log="The job was created to add the user '$user->id' to ldap ";
        $this->log('info',"$log",'cli');
        CreateAccountLdap::dispatch($user,$new_password,$role);
        return null;
    }

    public function generateEmail(User $user,Role $role){
        $domain=$role->domain;
        $possible_emails=[];
        $aux=null;
        $f_name=GeneralFunctions::cleanString($user->f_name);
        $s_name=GeneralFunctions::cleanString($user->s_name);
        $f_surname=GeneralFunctions::cleanString($user->f_surname);
        $fname=str_split($f_name);
        $fsurname=str_replace(" ", "", $f_surname);
        foreach ($fname as $l){
            $aux.=$l;
            $possible_email=strtolower("$aux$fsurname");
            if(!$this->existEmail($possible_email,$domain)){
                $new_email="$possible_email@$domain";
                CreateEmail::dispatch($user,$new_email,$role);
                $log="The CreateEmail '$new_email' job is created for user '".$user->id."'";
                $this->log('info',"$log",'cli');
                $data=[
                    'email_inst'=>"$new_email"
                ];
                $user->update($data);
                return null;
            }else{
                $possible_emails[]=$possible_email;
            }
        }
        $sname=str_split($s_name);
        foreach ($sname as $l){
            $aux.=$l;
            $possible_email=strtolower("$aux$fsurname");
            $exist=$this->existEmail($possible_email,$domain);
            if(!$exist){
                $new_email="$possible_email@$domain";
                CreateEmail::dispatch($user,$new_email,$role);
                $log="The CreateEmail '$new_email' job is created for user '".$user->id."'";
                $this->log('info',"$log",'cli');
                $data=[
                    'email_inst'=>"$new_email"
                ];
                $user->update($data);
                return null;
            }else{
                $possible_emails[]=$possible_email;
            }
        }
        $possible_email=$possible_emails[0].random_int(10,99);
        while(!$this->existEmail($possible_email,$domain)){
            $new_email="$possible_email@$domain";
            CreateEmail::dispatch($user,$new_email,$role);
            $log="The CreateEmail '$new_email' job is created for user '".$user->id."'";
            $this->log('info',"$log",'cli');
            $data=[
                'email_inst'=>"$new_email"
            ];
            $user->update($data);
            return null;
        }
        throw new \Exception('Posibles correos existen');
    }

    private function generateAvatarUrl(User $d){
        if(isset($d->photography)){
            $image=File::find($d->photography);
            $uri='/api/v1/image';
            $url=env('APP_URL').$uri."/".$image['name'];
            $d->photography=$url;
        }else{
            $email = $d->email;
            $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) );
            $d->photography=$grav_url;
        }
    }

    public function userLoggedIn(Request $request){
        $data_user=$request->user();

        $this->generateAvatarUrl($data_user);

        $userLoggedIn=[
            'cedula'=>$data_user->cedula,
            'f_name'=>$data_user->f_name,
            's_name'=>$data_user->s_name,
            'f_surname'=>$data_user->f_surname,
            's_surname'=>$data_user->s_surname,
            'photography'=>$data_user->photography,
            'email'=>$data_user->email,
            'email_inst'=>$data_user->email_inst,
            'update_password'=>$data_user->update_password
        ];
        return $this->response('false',Response::HTTP_OK,'200 OK',$userLoggedIn);
    }

    public function userInfo(Request $request)
    {
        $access_granted=Controller::validatePermissions($request->user()->id,'GET','/users/userinfo');

      if($access_granted) {
          $userinfo = $request->user();
          $this->generateAvatarUrl($userinfo);

          $userinfo['birth'] = $live = Parroquia::join('cantones', 'cantones.cod_canton', '=', 'parroquias.cod_canton')
              ->join('provinces', 'provinces.cod_province', '=', 'cantones.cod_province')
              ->join('countries', 'countries.ISO2', '=', 'provinces.cod_country')
              ->select("parroquias.name as Parroquia", "cantones.name as Canton", "provinces.name as Provincia", "countries.name as Country")
              ->where('cod_parroquia', '=', $userinfo['cod_parroquia'])
              ->get()->first();
          $userinfo['live'] = User::join('user_live_parroquias', 'user_live_parroquias.id_user', '=', 'users.id')
              ->join('parroquias', 'parroquias.cod_parroquia', '=', 'user_live_parroquias.cod_parroquia')
              ->join('cantones', 'cantones.cod_canton', '=', 'parroquias.cod_canton')
              ->join('provinces', 'provinces.cod_province', '=', 'cantones.cod_province')
              ->join('countries', 'countries.ISO2', '=', 'provinces.cod_country')
              ->select("references_place", "main_street", "secondary_street", "house_number", "parroquias.name as Parroquia","parroquias.cod_parroquia", "cantones.name as Canton","cantones.cod_canton", "provinces.name as Provincia","provinces.cod_province", "countries.name as Country", "countries.ISO2 as ISO2")
              ->where('end_date', '=', null)
              ->get()->first();
          return $this->response('false', Response::HTTP_OK, '200 OK', $request->user());
      }
        return $this->response(true,Response::HTTP_FORBIDDEN,'403 Forbidden' );
    }

    public function sendVerifyEmail(Request $request){
        $errors=[];
        $user=$request->user();
        if($user->email_verified_at==null) {
            $confirmation_code = str::random(25);
                $dat_mail = [
                    'name' => "$user->f_surname $user->s_surname $user->f_name $user->s_name",
                    'email' => $user->email,
                    'token' => Crypt::encryptString($confirmation_code)
                ];
                $for = [
                    ['name' => "$user->f_name $user->s_name $user->f_surname $user->s_surname",
                        'email' => $user->email]
                ];
                $data['confirmation_code']=$confirmation_code;
                $user->update($data);
                Mail::to($for)->send(new ConfirmMail($dat_mail));
                return $this->response('false', Response::HTTP_OK, '200 OK', ['Se envió un correo de confirmación']);
        }else{
            $errors[]='El correo ya ha sido confirmado';
        }
        return $this->response('true', Response::HTTP_BAD_REQUEST, '400 BAD REQUEST', $errors);
    }

    public function confirmEmail(Request $request){
        $user=$request->user();
         $code=Crypt::decryptString($request->token);
        if($user->email_verified_at==null&&$request->confirm_email==1){
            if($code==$user->confirmation_code&&$request->email==$user->email){
            $user->email_verified_at =  now();
            $user->confirmation_code = '';
            $user->save();
            $msj[]="Correo confirmado";
            return $this->response('false', Response::HTTP_OK, '200 OK', $msj);
            }else if($code==$user->confirmation_code){
                $errors[]='Código Incorrecto';
                return $this->response('true', Response::HTTP_BAD_REQUEST, '400 BAD REQUEST', $errors);
            }

        }else{
            $errors[]='El Correo ya ah sido confirmado';
            return $this->response('true', Response::HTTP_BAD_REQUEST, '400 BAD REQUEST', $errors);
        }
    }

    public function userInfoUpdate(Request $request){
        $access_granted=Controller::validatePermissions($request->user()->id,'PUT','/users/userinfo');
        if($access_granted){
            $data=[];
            $errors=[];
            $edit_permission=[
                "email",
                "gender",
                "ethnicity",
                "civil_status",
                "date_of_birth",
                "mobile",
                "phone",
                "type_of_disability",
                "percentage_of_disability",
                "cod_conadis",
                "password",
                "new_password",
                "confirm_password"
            ];
            foreach ($edit_permission as $d){
                if(isset($request->$d)){
                    $data[$d]=$request->$d;
                }
            }
             $validate=\Validator::make($data,[
                'email'    => 'email|unique:users',
                 "gender"=>"in:Masculino,Femenino,LGBT,Otro",
                 "ethnicity"=>"in:Afroecuatoriano/a,Blanco/a,Indigena,Mestizo/a,Montubio/a,Mulato/a,Negro/a,Otro",
                 "civil_status"=>"in:Casado/a,Soltero/a,Divorciado/a,Viudo/a,Unión de Hecho",//"in:['Casado/a', 'Soltero/a', 'Divorciado/a', 'Viudo/a','Unión de Hecho']",
                 "date_of_birth",
                 "mobile",
                 "phone",
                 "type_of_disability",
                 "percentage_of_disability",
                 "cod_conadis",
                 "password"=>'password:api',
                 "confirm_password",
                 "new_password"=>'same:confirm_password|regex:/^(?=.*[0-9])(?=.*[A-Za-z])/|regex:/^(?=.*[a-z])(?=.*[A-Z])/|regex:/(?=.*[$@$!%*?&.-])[A-Za-z$@$!%*?&.-]/|regex:/^([A-Za-z0-9$@$!%*?&.-]){8,16}$/',
            ]);
            if ($validate->fails())
            {
                return $this->response('true', Response::HTTP_BAD_REQUEST, '400 BAD REQUEST', $validate->errors());
            }
            $user=$request->user();
            if(isset($data['new_password'])){
                $data['password']=bcrypt($data['new_password']);
                LdapController::updatePassword($user->cedula,$data['new_password']);
            }
            if(isset($data['email'])){
                $data['email_verified_at']=null;
                $data['confirmation_code'] = str::random(25);
            }
             if($user->update($data)){
                 if(isset($data['email'])){
                     $dat_mail=[
                         'name'=>"$user->f_surname $user->s_surname $user->f_name $user->s_name",
                         'email'=>$data['email'],
                         'token'=>Crypt::encryptString($data['confirmation_code'])
                     ];
                     $for=[
                         [ 'name'=>"$user->f_name $user->s_name $user->f_surname $user->s_surname",
                            'email'=>$data['email']]
                     ];
                      Mail::to($for)->send(new ConfirmMail($dat_mail));
                 }
                 return $this->response('false', Response::HTTP_OK, '200 OK', $user);
             }else{
                 return $this->response('true', Response::HTTP_BAD_REQUEST, '400 BAD REQUEST', $errors);
             }
        }else{
            return $this->response(true,Response::HTTP_FORBIDDEN,'403 Forbidden' );
        }
    }

    public function uploadAvatar(Request $request){
        $access_granted=Controller::validatePermissions($request->user()->id,'POST','/users/avatar');
        if($access_granted){
            $errors=[];
            if($request->hasFile('avatar')){
                $file = $request->file('avatar');
                $validate = \Validator::make(
                    array(
                        'file' => $file,
                    ),
                    array(
                        'file' => 'mimes:jpg, jpeg, png, svg'
                    )
                );

                if(!$validate->fails()){
                    $cedula=$request->user()->cedula;
                    $extension= $file->getClientOriginalExtension();
                    $type=$file->getType();
                    $path = $request->file('avatar')->store("file/$cedula/avatars");
                    $aux=explode('/',$path);
                    $name=end($aux);
                    $data=[
                        'id_user'=>$request->user()->id,
                        'path'=>$path,
                        'name'=>$name,
                        'extension'=>$extension,
                        'type'=>$type
                    ];
                     $created= File::create($data);
                    if($created){
                        $data=[
                            'photography'=>$created->id_file
                        ];
                        $request->user()->update($data);
                        return $this->response('false', Response::HTTP_CREATED, '201 CREATED', '');
                    }

                }else{
                    $errors[]='El archivo es incorrecto';
                    return $this->response('true', Response::HTTP_BAD_REQUEST, '400 BAD REQUEST', $errors);
                }
            }else{
                $errors[]='El archivo es incorrecto';
                return $this->response('true', Response::HTTP_BAD_REQUEST, '400 BAD REQUEST', $errors);
            }
        }else{
            return $this->response(true,Response::HTTP_FORBIDDEN,'403 Forbidden' );
        }

    }

    public function recoverPassword(Request $request){
        $verifyCaptcha= GeneralFunctions::verifyRecaptcha($request->recaptcha_token);

        if($verifyCaptcha){
            $cedula=$request->cedula;
            $user=User::where('cedula','=',$cedula)
                ->get()
                ->first();
            if(!isset($user)){
                $errors['user_not_found']="Usuario no encontrado";
                return $this->response('true', Response::HTTP_BAD_REQUEST, '400 BAD REQUEST', $errors);
            }else{
                $remember_token = str::random(60);
                $remember_toke_valid_time=now()->addMinute(15);
                $data['remember_token']=$remember_token;
                $data['remember_toke_valid_time']=$remember_toke_valid_time;
                $dat_email=[
                    'name' => "$user->f_surname $user->s_surname $user->f_name $user->s_name",
                    'email' => $user->email_inst,
                    'cedula' => Crypt::encryptString($user->cedula),
                    'token'=>$remember_token
                ];
                $for = [
                    ['name' => "$user->f_name $user->s_name $user->f_surname $user->s_surname",
                        'email' => $user->email_inst]
                ];
                $user->update($data);
                Mail::to($for)->send(new SendTokenResetPassword($dat_email));
                $mjs=[
                    'to'=>GeneralFunctions::hiddenEmail($user->email_inst)
                ];
                return $this->response('false', Response::HTTP_OK, '200 OK',$mjs);

            }
        }else{
            $errors[]="Captcha Incorrecto";
            return $this->response('true', Response::HTTP_BAD_REQUEST, '400 BAD REQUEST', $errors);
        }
    }

    public function restPassword(Request $request){
        $cedula=null;
        $token=$request->token;
        $errors=[];
        try{
            $cedula =Crypt::decryptString($request->user);
            $user=User::where('cedula','=',$cedula)
                ->get()
                ->first();
            $remember_token=$user->remember_token;
            $remember_toke_valid_time=$user->remember_toke_valid_time;
            if(now()<$remember_toke_valid_time){
                if($remember_token==$token&&isset($request->new_password)&&isset($request->confirm_password)){
                    $data=[
                        'new_password'=>$request->new_password,
                        'confirm_password'=>$request->confirm_password,
                        'remember_token'=>null,
                        'remember_toke_valid_time'=>null
                    ];
                    $validate=\Validator::make($data,[
                        "confirm_password",
                        "new_password"=>'same:confirm_password|regex:/^(?=.*[0-9])(?=.*[A-Za-z])/|regex:/^(?=.*[a-z])(?=.*[A-Z])/|regex:/(?=.*[$@$!%*?&.-])[A-Za-z$@$!%*?&.-]/|regex:/^([A-Za-z0-9$@$!%*?&.-]){8,16}$/',
                    ]);
                    if ($validate->fails())
                    {
                        return $this->response('true', Response::HTTP_BAD_REQUEST, '400 BAD REQUEST', $validate->errors());
                    }
                    if(isset($data['new_password'])){
                        $data['password']=bcrypt($data['new_password']);
                    }
                    if($user->update($data)){
                        $msj['change_success']='Se actualizo el password correctamente';
                        return $this->response('false', Response::HTTP_OK, '200 OK', $msj);
                    }else{
                        $errors['internal_error']='Ocurrio un error interno';
                        return $this->response('true', Response::HTTP_INTERNAL_SERVER_ERROR, '500 INTERNAL ERROR',  $errors);
                    }

                }else if($remember_token==$token){
                    $msj=[
                        'token'=>$token
                    ];
                    return $this->response('false', Response::HTTP_OK, '200 OK',$msj);
                }else{
                    $errors['incorrect_token']="Token Incorrecto";
                }

            }else{
                $errors['incorrect_token']="El token ya caduco";
            }
            $user->where('remember_token','=',$token)
                ->get()
                ->first();
        }catch(DecryptException $de){
            $errors['incorrect_token']="Token Incorrecto";
        }
        return $this->response('true', Response::HTTP_BAD_REQUEST, '400 BAD REQUEST', $errors);
    }
    public function demo(Request $request){
        return $request;
    }
}
