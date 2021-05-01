<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmMail;
use App\Mail\SendTokenResetPassword;
use App\Models\File;
use App\Models\Parroquia;
use App\Models\User;
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
        $request['photography']="https://edteam-media.s3.amazonaws.com/users/thumbnail/3251b2ee-ae8d-48ce-8bfe-3d899caf366e.jpg";
        $request['password']=password_hash($request->cedula,PASSWORD_DEFAULT);
        $errors= User::verifyRequired($request);
        if($errors==null) {
            $user = User::create($request->all());
           $token= $user->createToken('LaravelAuthApp')->accessToken;
            return response()->json([
                'errors' => false,
                'code' => Response::HTTP_CREATED,
                'status' => '201 Created',
                'data' => $user,
                'token'=>$token,
            ], Response::HTTP_CREATED, Controller::$headers);
        }else{
            return response()->json([
                'errors' => true,
                'code' => Response::HTTP_BAD_REQUEST,
                'status' => '400 Bad Request',
                'data' => $errors
            ], Response::HTTP_BAD_REQUEST, Controller::$headers);
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
        //
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
            'email_inst'=>$data_user->email_inst
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
            if(isset($data['new_password'])){
                $data['password']=bcrypt($data['new_password']);
            }
            if(isset($data['email'])){
                $data['email_verified_at']=null;
                $data['confirmation_code'] = str::random(25);
            }
             $user=$request->user();
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
}
