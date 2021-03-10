<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey='cod_category';

    protected $fillable=[
        "name",
        "detail",
        'deleted'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted'

    ];
}
