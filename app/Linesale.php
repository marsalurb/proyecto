<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class linesale extends Model
{
    //
    protected $fillable = ['amount'];

    public function item(){
        return $this->hasOne('App\Item');
    }

    public function sale(){
        return $this->belongsTo('App\Sale');
    }
}
