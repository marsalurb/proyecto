<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    //
    protected $fillable = ['name', 'email', 'address', 'number', 'cif', 'item_id'];

    public function item(){
        return $this->belongsToMany('App\Item');
    }
}
