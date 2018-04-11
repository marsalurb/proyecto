<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];

    public function employer(){
        return $this->hasMany('App\Employer');
    }
}
