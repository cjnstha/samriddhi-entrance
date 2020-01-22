<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\ExamInfo;
use App\Merge;
use App\Questions;

class StudentsController extends Controller
{
    public function registerForm()
    {
    	return view('students.stdregister');
    }

    public function store(Request $request)
    {
        request()->validate([
            'exam_code' => 'exists:merge_questions,unique_id'
        ]);
    	$student = new Students;
    	$sIdValidate = $request->input('student_name');
    	$examCodeForValidate=$request->input('exam_code');
    	$initialScore = 0;
    	$checker=Students::where('student_name','=',$sIdValidate)->where('uniqueid','=',$examCodeForValidate)->count();
            if ($checker>0) {
                return "YOU ALREADY DONE THIS EXAM";
            }else{
                $student = Students::create([
                        'student_name' => $sIdValidate,
                        'uniqueid' => $request->input('exam_code'),
                        'marks' => $initialScore
                ]);
                $studentRealId = $sIdValidate;
                $student_id = Students::where('student_name',$studentRealId)->value('student_name');
                $questions = Merge::all();
                return view('give-exam.answersheet')->with(compact('questions','student_id','examCodeForValidate'));
            }
        }
    public function answer()
    {
        return view('give-exam.answer');
    }
}
