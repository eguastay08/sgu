<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plataform extends Model
{
    use HasFactory;
    private $fillable=[
        "name",
        "image",
        "url",
        "session_required",
        "cod_category"
    ];
    public function category(){
        return $this->belongsTo("App\Models\Category","cod_category");
    }
}
