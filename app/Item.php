<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    //
    protected $fillable = ['price', 'model', 'brand', 'guarantee', 'stock', 'amount', 'sale_id', 'supplier_id'];

    public function sale(){
        return $this->belongsToMany('App\Sale')->withPivot('amount');
    }

    public function supplier(){
        return $this->belongsToMany('App\Supplier');
    }
}
