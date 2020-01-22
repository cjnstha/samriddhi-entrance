<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examinfo extends Model
{
 	protected $fillable = [
        'teacher_name', 'course', 'set','question_length','time'
    ];

    // public function set(){
    // 	return $this->hasOne('App\SetQuestion','set_name');
    // }
}
