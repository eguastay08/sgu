<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_platform extends Model
{
    use HasFactory;
    private $fillable=[
        "cod_rol",
        "cod_plataform",
    ];
    public function rol(){
        return $this->belongsTo("App\Models\Rol","cod_rol");
    }
    public function plataform(){
        return $this->belongsTo("App\Models\Plataform","cod_plataform");
    }
}
