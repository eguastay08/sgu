<?php

namespace App\Http\Controllers;

use Carbon\Carbon;


use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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
        return response()->json(['message' =>
            'Successfully logged out']);
    }


    public function refresh(Request $request){
        return  $request->user();
    }

}
