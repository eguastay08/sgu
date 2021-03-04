<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_favorite_plataform extends Model
{
    use HasFactory;
    private $fillable=[
        "orden",
        "cedula",
        "cod_plataform"
    ];

    public function User(){
        return $this->belongsTo("App\Models\User","cedula");
    }
    public function Plataform(){
        return $this->belongsTo("App\Models\Plataform","cod_plataform");
    }
}
