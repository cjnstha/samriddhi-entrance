<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\Answers;

class AnswerController extends Controller
{
   public function store(Request $request)
   	{
        
        if ($request->ajax()) {
            $answer=Answers::create([
                'student_name' => $request->input('student_name'),
                'question' => $request->input('questions'),
                'given_answer' => $request->input('answers'),
                'true_answer' => $request->input('true_answer')

            ]);
            
            if ($request->input('answers')==$request->input('true_answer')) {
                $insert=Students::where('student_name',$request->input('student_name'))->increment('marks');
            }
            return response($answer);
        }
        else{
            return "ajax not done";
        }
    }

}
