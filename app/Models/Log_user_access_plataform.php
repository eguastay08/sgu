<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log_user_access_plataform extends Model
{
    protected $fillable= [
        'user_agent',
        'ip',
        'cedula',
        'cod_plataform'
    ];

}
