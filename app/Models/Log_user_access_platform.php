<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log_user_access_platform extends Model
{
    protected $fillable= [
        'user_agent',
        'ip',
        'id_user',
        'cod_platform'
    ];

    public function User(){
        return $this->belongsTo("App\Models\User","id");
    }

}
