<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_live_parroquia extends Model
{
    use HasFactory;
    protected $fillable=[
        "start_date",
        "end_date",
        "references_place",
        "main_street",
        "secondary_street",
        "house_number",
        "cedula",
        "cod_parroquia"
    ];

    protected $hidden=[
        "start_date",
        "end_date",
    ];
    public function User(){
        return $this->belongsTo("App\Models\User","cedula");
    }
    public function Parroquia(){
        return $this->belongsTo("App\Models\Parroquia","cod_parroquia");
    }
}
