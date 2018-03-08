<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    //
    protected $fillable = ['name', 'email', 'address', 'number', 'cif'];

    public function item(){
        return $this->belongsToMany('App\Item');
    }
}
