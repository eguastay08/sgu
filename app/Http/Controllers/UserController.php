<?php

namespace App\Http\Controllers;

use App\Models\Parroquia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all()->where('deleted','!=','1');
        return response()->json([
            'errors' => false,
            'code' => Response::HTTP_OK,
            'status'=>'200 OK',
            'data' => $data
        ], Response::HTTP_OK, Controller::$headers);
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

    public function userLoggedIn(Request $request){
        $data_user=$request->user();
        //->select( 'cedula','f_name','s_name','f_surname','s_surname', 'photography');
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
        //return password_hash('Sistemas123.**',PASSWORD_DEFAULT);

        $access_granted=Controller::validatePermissions($request->user()->id,'GET','/users/userinfo');

      if($access_granted) {
          $userinfo = $request->user();
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
      return $this->response(true,Response::HTTP_UNAUTHORIZED,'401 Unauthorized' );

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
                "cod_conadis"
            ];
            foreach ($edit_permission as $d){
                if(isset($request->$d)){
                    $data[$d]=$request->$d;
                }
            }
             $validate=\Validator::make($data,[
                'email'    => 'email|unique:users',
                 "gender"=>"in:Masculino,Femenino,LGBT,Otro",
                 "ethnicity",
                 "civil_status",
                 "date_of_birth",
                 "mobile",
                 "phone",
                 "type_of_disability",
                 "percentage_of_disability",
                 "cod_conadis"
            ]);
            if ($validate->fails())
            {
                return $this->response('true', Response::HTTP_BAD_REQUEST, '400 BAD REQUEST', $validate->errors());
            }
             $user=$request->user();
             if($user->update($data)){
                 return $this->response('false', Response::HTTP_OK, '200 OK', $user);
             }else{
                 return $this->response('true', Response::HTTP_BAD_REQUEST, '400 BAD REQUEST', $errors);
             }
        }else{
            return $this->response(true,Response::HTTP_UNAUTHORIZED,'401 Unauthorized' );
        }
    }
}
