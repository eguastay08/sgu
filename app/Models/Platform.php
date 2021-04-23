<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;
    protected $primaryKey='cod_platform';

    protected $fillable=[
        "name",
        "image",
        "url",
        "session_required",
        "cod_category",
        "detail",
        "deleted"
    ];

    protected $required=[
        "name",
        "image",
        "url",
        "cod_category"
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted',
        'cod_category'
    ];
    public function category(){
        return $this->belongsTo("App\Models\Category","cod_category");
    }
}
