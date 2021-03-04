<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $fillable=[
        "name",
        "cod_country"
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function pais(){
        return $this->belongsTo("App\Models\Pais","iso2");
    }
}
