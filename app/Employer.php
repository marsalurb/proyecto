<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
    //
    protected $fillable = ['role_id', 'salary'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function sale(){
        return $this->hasMany('App\Sale');
    }

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function getFullNameAttribute(){
        return $this->user->firstname .' '.$this->user->surname;
    }
}
