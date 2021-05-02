<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_role extends Model
{
    use HasFactory;


    protected $fillable=[
        "cod_rol",
        "id_user"
    ];

    protected $hidden=[
        "created_at",
        "updated_at"
    ];

    public function User(){
        return $this->belongsTo("App\Models\User","id");
    }
    public function Rol(){
        return $this->belongsTo("App\Models\Rol","cod_rol");
    }
}
