<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens ,HasFactory, Notifiable;

    //protected $primaryKey= 'cedula';

    protected $fillable = [
        'cedula',
        'f_name',
        's_name',
        'f_surname',
        's_surname',
        'gender',
        'mobile',
        'phone',
        'photography',
        'date_of_birth',
        'ethnicity',
        'type_of_disability',
        'percentage_of_disability',
        'cod_conadis',
        'civil_status',
        'type_auth',
        'password',
        'email',
        'email_inst',
        'email_verified_at',
        'cedula_father',
        'cedula_mother',
        'cedula_emergency_contact',
        'cod_parroquia',
    ];

    protected $required=[
        'cedula',
        'f_name',
        's_name',
        'f_surname',
        's_surname',
        'gender',
        'email'
    ];
    public function parroquia(){
        return $this->belongsTo("App\Models\Parroquia");
    }
    public function userFather(){
        return $this->belongsTo("App\Models\User",'cedula_father');
    }
    public function userMother(){
        return $this->belongsTo("App\Models\User",'cedula_mother');
    }
    public function userContactEmergency(){
        return $this->belongsTo("App\Models\User",'cedula_emergency_contact');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'deleted',
        'email_verified_at',
        'created_at',
        'updated_at',
        'id_father',
        'id_mother',
        'id_emergency_contact',
        'cod_parroquia',
        'id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

