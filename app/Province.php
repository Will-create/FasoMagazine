<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $guarded=[];
    public function news(){
    return $this->hasMany('App\News');   
}

public function region(){
    return $this->belongsTo('App\Region');   
}

}
