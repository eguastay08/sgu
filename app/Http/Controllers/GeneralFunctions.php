<?php


namespace App\Http\Controllers;


class GeneralFunctions
{
    public static function verifyRecaptcha($token=''){
        $key_secret=env('APP_RECAPTCHA_KEY_SECRET');
        $url="https://www.google.com/recaptcha/api/siteverify";
        $data=[
          'secret'=>$key_secret,
          'response'=>$token
        ];
        $options=[
            'http'=>[
                'header'=>"Content-Type: application/x-www-form-urlencoded",
                "method"=>'POST',
                'content'=>http_build_query($data)
            ]
        ];
        $context=stream_context_create($options);
        $result=file_get_contents($url, false, $context);
         $resultJson = json_decode($result);
        if ($resultJson->success != true) {
            return false;
        }
        if ($resultJson->score >= 0.3) {
          return true;
        } else {
            return false;
        }
    }

    public static function hiddenEmail($email){
        $user=explode('@',$email)[0];
        $fqdn=explode('@',$email)[1];
        $user=str_split($user);
        $user_view= round(count($user)*.2);
        $user_hidden='';
        foreach ($user as $key => $v) {
            if($key<=$user_view ||array_key_last($user)==$key){
                $user_hidden.=$v;
            }else{
                $user_hidden.='*';
            }
        }
      return "$user_hidden@$fqdn";
    }
}
