<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchaser extends Model
{
    //
    protected $fillable = ['sex', 'birthdate'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function sale(){
        return $this->hasMany('App\Sale');
    }
}
