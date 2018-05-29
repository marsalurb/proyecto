<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function employer(){
        return $this->hasOne('App\Employer');
    }

    public function purchaser(){
        return $this->hasOne('App\Purchaser');
    }

    public function fullname(){
        return $this->firstname + ' ' + $this->surname;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'email', 'password', 'surname2', 'surname', 'address', 'number', 'dni'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
