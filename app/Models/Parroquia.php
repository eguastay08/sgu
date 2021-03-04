<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    use HasFactory;
    private $fillable=[
        "name",
        "type",
        "cod_canton"
    ];

    public function canton(){
        return $this->belongsTo("App\Models\Canton","cod_canton");
    }
}
