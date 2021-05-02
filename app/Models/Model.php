<?php


namespace App\Models;


class Model extends \Illuminate\Database\Eloquent\Model
{
    public static function verifyRequired($request){
        $required= (new static)->required;
        $errors=[];
        foreach ($required as $field){
            if(!isset($request->$field)){
                $errors[]="EL campo $field es requerido";
            }
        }
        return $errors;
    }
}
