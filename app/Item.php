<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    //
    protected $fillable = ['price', 'model', 'brand', 'guarantee', 'stock', 'supplier_id'];

    public function itemSale(){
        return $this->hasMany('App\ItemSale');
    }

    public function supplier(){
        return $this->belongsToMany('App\Supplier');
    }
}
