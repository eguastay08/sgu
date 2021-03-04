<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_role extends Model
{
    use HasFactory;
    protected $fillable=[
        "cod_rol",
        "cedula"
    ];
    public function User(){
        return $this->belongsTo("App\Models\User","cedula");
    }
    public function Rol(){
        return $this->belongsTo("App\Models\Rol","cod_rol");
    }
}
