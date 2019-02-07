<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends MyModel
{
    //
    public function firstterm(){
        return $this->hasMany('App\Firstterm');
    }

    public function secondterm(){
        return $this->hasMany('App\Secondterm');
    }

    public function thirdterm(){
        return $this->hasMany('App\Thirdterm');
    }

    public function users(){
        return $this->belongsToMany('App\User');
    }
}
