<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
    //
    protected $fillable = ['role'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function sale(){
        return $this->hasMany('App\Sale');
    }
}
