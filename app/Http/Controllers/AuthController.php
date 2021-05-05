<?php

namespace App\Http\Controllers;


use App\Models\User;
use Carbon\Carbon;


use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $data=[
            'email_inst'=> Request("email"),
            'password'=>Request("password"),
            'type_auth'=>'manual',
            'deleted'=>false
        ];


        if (!Auth::attempt($data)) {
            return response()->json([
                'message' => 'Unauthorized'], 401);
        }
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');

        $token = $tokenResult->token;
        if ($request->remember) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        }
        $token->save();
        $data=[
            'user'=>$user,
            'access_token'=>[
                "token"=>$tokenResult->accessToken,
                "type"=>'Bearer',
                'expires_at' => Carbon::parse(
                    $tokenResult->token->expires_at)
                    ->toDateTimeString()
             ]
        ];

        return $this->response('false',Response::HTTP_OK,'200 OK',$data);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return $this->response('false',Response::HTTP_OK,'200 OK',['message' =>
            'Successfully logged out']);
    }

    public function refresh(Request $request){
        return  $request->user();
    }

    public function loginWithKeycloak(){
         $user = Socialite::driver('keycloak')->user();
        $data_user=User::where('type_auth','=','oidc')
         ->where('email_inst','=',$user->getEmail())
         ->where('deleted','=',false)
         ->first();
        if($data_user!=null){
            $tokenResult = $data_user->createToken('Personal Access Token');
            $token = $tokenResult->token;
            $token->save();
            $data=[
                'user'=>$data_user,
                'access_token'=>[
                    "token"=>$tokenResult->accessToken,
                    "type"=>'Bearer',
                    'expires_at' => Carbon::parse(
                        $tokenResult->token->expires_at)
                        ->toDateTimeString()
                ]
            ];

            return $this->response('false',Response::HTTP_OK,'200 OK',$data);

        }else{
            return response()->json([
                'message' => 'Unauthorized'], 401);
        }

    }

    public function keycloakRedirect(){
      return  Socialite::driver('keycloak')->with(['scope'=>'openid profile email'])->redirect();
    }

}
