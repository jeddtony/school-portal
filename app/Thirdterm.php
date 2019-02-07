<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thirdterm extends MyModel
{
    //
    public function student(){
        return $this->belongsTo('App\Student');
    }

    public function subject(){
        return $this->belongsTo('App\Subject');
    }

    public function studentclass(){
        return $this->belongsTo('App\Studentclass');
    }
}
