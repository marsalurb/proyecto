<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    //
    protected $fillable = ['business', 'email', 'address', 'telephonenumber', 'nif'];

    public function item(){
        return $this->belongsToMany('App\Item');
    }
}
