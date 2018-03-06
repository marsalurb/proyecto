<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    //

    public function employer(){
        return $this->belongsTo('App\Employer');
    }

    public function purchaser(){
        return $this->belongsTo('App\Purchaser');
    }

    public function linesale(){
        return $this->hasMany('App\Linesale');
    }
}
