<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $fillable = ['questions','set_name','choice1','choice2','choice3','choice4','answers','course_name']; 
}
