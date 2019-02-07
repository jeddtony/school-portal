<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends MyModel
{
    //
    public function studentclass(){
        return $this->belongsTo('App\Studentclass');
    }

    public function firstterm(){
        return $this->hasMany('App\Firstterm');
    }

    public function secondterm(){
        return $this->hasMany('App\Secondterm');
    }

    public function thirdterm(){
        return $this->hasMany('App\Thirdterm');
    }
}
