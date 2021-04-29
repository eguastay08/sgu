<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $primaryKey="cod_menu";

    protected $fillable=[
        'name',
        'order',
        'ico',
        'path',
        'cod_menu_father',
        'create_at',
        'update_at'
    ];
    protected $hidden=[
        'create_at',
        'update_at'
    ];
    public function menu(){
        return $this->belongsTo('App\Model\Menu','cod_menu');
    }
}
