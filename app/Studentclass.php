<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentclass extends MyModel
{
    //
    public function firstterms(){
        return $this->hasMany('App\Firstterm');
    }

    public function secondterms(){
        return $this->hasMany('App\Secondterm');
    }

    public function thirdterms(){
        return $this->hasMany('App\Thirdterm');
    }

    public function user(){
        return $this->hasOne('App\User');
    }


}
