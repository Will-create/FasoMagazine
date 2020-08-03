<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded=[];
    public function province(){
        return $this->belongsTo('App\Province');
    }
    public function region(){
        return $this->belongsTo('App\Region');
    }
    public function auteur(){
        return $this->belongsTo('App\User');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
