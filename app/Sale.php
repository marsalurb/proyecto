<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    //
    protected $fillable = ['purchaser_id', 'employer_id'];

    public function employer(){
        return $this->belongsTo('App\Employer');
    }

    public function purchaser(){
        return $this->belongsTo('App\Purchaser');
    }

    public function itemSale(){
        return $this->hasMany('App\ItemSale');
    }
}
