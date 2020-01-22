<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Students;
use App\Answers;
use App\Merge;
class AnswerController extends Controller
{
   public function store(Request $request)
   	{   
        $merge_count =  Merge::where('unique_id',request('exam_code'))->count();
        $total =  Answers::where('exam_code',request('exam_code'))->where('student_name',request('student_name'))->count();
        if($merge_count != $total){
            if ($request->ajax()) {
                $answer=Answers::create([
                    'student_name' => $request->input('student_name'),
                    'question' => $request->input('questions'),
                    'given_answer' => $request->input('answers'),
                    'true_answer' => $request->input('true_answer'),
                    'true_answer' => $request->input('true_answer'),
                    'exam_code' => $request->input('exam_code')
                ]);
                if ($request->input('answers')==$request->input('true_answer')) {
                    $insert=Students::where('student_name',$request->input('student_name'))->increment('marks');
                }
                return response($answer);
            }else{
                return "ajax not done";
            }
            
        }else{
            return "already done";
        }
    }
}
