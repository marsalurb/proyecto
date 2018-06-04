<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemSupplier extends Model
{
    protected $fillable = ['item_id', 'supplier_id'];

    public function item()
    {
        return $this->belongsTo('App\Item');
    }
    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }

}
