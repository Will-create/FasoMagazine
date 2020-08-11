<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $guarded=[];
    public function new(){
    return $this->hasMany('App\News');   
}
}
