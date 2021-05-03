<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log_general extends Model
{
    //use HasFactory;
    protected $table="logs_generals";
    protected $primaryKey='cod_log';
    protected $fillable=[
        'cod_log',
        'type',
        'ip',
        'user_agent',
        'log',
        'origin',
        'id_user'
    ];


}
