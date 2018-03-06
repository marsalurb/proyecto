<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    //
    protected $fillable = ['price', 'model', 'brand', 'guarantee'];

    public function linesale(){
        return $this->belongsTo('App\Linesale');
    }

    public function supplier(){
        return $this->belongsToMany('App\Supplier');
    }
}
