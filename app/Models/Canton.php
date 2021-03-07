<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    use HasFactory;

    protected $primaryKey='cod_canton';
    protected $table='cantones';

    protected $fillable=[
        "name",
        "cod_province"
    ];

    protected $hidden=[
        'created_at',
        'updated_at',
        'cod_province'
    ];
    public function provincia(){
        return $this->belongsTo('App\Model\Provinces','cod_province');
    }
}
