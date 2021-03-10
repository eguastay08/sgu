<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $id='id_file';
    protected $fillable=[
        'path',
        'name',
        'extension',
        'type',
        'cod_plataform',
        'cedula'
    ];
}
