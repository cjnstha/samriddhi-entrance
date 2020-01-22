<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    protected $fillable = [
        'student_name', 'question', 'given_answer','true_answer'
    ];
}
