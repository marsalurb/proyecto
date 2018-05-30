<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemSale extends Model
{
    protected $fillable = ['amount', 'sale_id', 'item_id'];

    public function sale(){
        return $this->belongsTo('App\Sale');
    }

    public function item(){
        return $this->belongsTo('App\Item');
    }
}
