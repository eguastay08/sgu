<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_access extends Model
{
    use HasFactory;
    private $fillable=[
        "cod_rol",
        "cod_access"
    ];
    public function rol(){
        return $this->belongsTo("App\Models\Rol","cod_rol");
    }
    public function access(){
        return $this->belongsTo("App\Models\Access","cod_access");
    }
}
