<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    //
    protected $fillable = ['name', 'category',
     'science', 'commercial', 'arts', 'studentclass_id', 'student_id', 'subject_id', 'studentclass_id',
        'assessment', 'exam', 'total', 'comment'];
}
