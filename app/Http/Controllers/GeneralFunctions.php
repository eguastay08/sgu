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
        if ($resultJson->score <= 0.5) {
          return true;
        } else {
            return false;;
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

    public static function arraySort(&$arrIni, $col, $order = SORT_ASC)
    {
        $arrAux = array();
        foreach ($arrIni as $key=> $row)
        {
            $arrAux[$key] = is_object($row) ? $arrAux[$key] = $row->$col : $row[$col];
            $arrAux[$key] = strtolower($arrAux[$key]);
        }
        array_multisort($arrAux, $order, $arrIni);
    }

    public static function object_to_array($data)
    {
        if (is_array($data) || is_object($data))
        {
            $result = array();
            foreach ($data as $key => $value)
            {
                $result[$key] = object_to_array($value);
            }
            return $result;
        }
        return $data;
    }

   public static function csvToJson($file,$delimiter=',',$length=100000) {
        $fp = fopen($file, 'r');
        $key = fgetcsv($fp,"$length","$delimiter");
        $json = array();
        while ($row = fgetcsv($fp,"$length","$delimiter")) {
            $json[] = array_combine($key, $row);
        }
        fclose($fp);
        return $json;
    }

    public static function inArray($array=array(),$value){
        foreach ($array as $val){
            if($val==$value){
                return true;
            }
        }
        return false;
    }

    public static function cleanString($cadena){
        $cadena = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $cadena
        );

        $cadena = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $cadena );

        $cadena = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $cadena );

        $cadena = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $cadena );

        $cadena = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $cadena );

        $cadena = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C'),
            $cadena
        );

        return $cadena;
    }
}
