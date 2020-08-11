<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded=[];

    public function province(){
        return $this->belongsTO('App\Province');   
}

    public function region(){
    return $this->belongsTo('App\Region');   
}

public function categorie(){
    return $this->belongsTo('App\Categorie');   
}

public function user(){
    return $this->belongsTo('App\User');   
}
}
