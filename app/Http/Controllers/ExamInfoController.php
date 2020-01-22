<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Examinfo;

class ExamInfoController extends Controller
{
    
    public function index(){
        return view('entrance.index');
    }

    public function store(Request $request){

    	$examinfo = new Examinfo;
    	$examinfo = Examinfo::create([
                'teacher_name' => request('teacher_name'),
                'course' => request('course'),
                'set' => request('set'),
                'question_length' => request('question_length'),
                'time' => request('time')
            ]);	
    	return view('makequestion.create', ['examinfo' => $examinfo]);
    }
}
