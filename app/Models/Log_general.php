<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log_general extends Model
{
    //use HasFactory;

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

    public function User(){
        return $this->belongsTo("App\Models\User","id");
    }

}
