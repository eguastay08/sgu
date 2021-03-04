<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    use HasFactory;
    private $fillable=[
        "name",
        "cod_province"
    ];

    public function provincia(){
        return $this->belongsTo('App\Model\Provinces','cod_province');
    }
}
