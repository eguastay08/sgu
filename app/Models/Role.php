<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $primaryKey="cod_rol";

    protected $fillable=[
        "name",
        "domain",
        "group_email"
    ];
}
