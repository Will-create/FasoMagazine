<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $guarded=[];
    public function news(){
    return $this->hasMany('App\News');   
}

public function province(){
    return $this->hasMany('App\Province');   
}

}
