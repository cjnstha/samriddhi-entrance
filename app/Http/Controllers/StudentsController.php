<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\ExamInfo;
use App\Merge;
use App\Questions;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class StudentsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function registerForm()
    {
        return view('students.stdregister');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function store(Request $request)
    {
        request()->validate([
            'student_name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255','unique:students'],
            'contact_no' => 'required',
            'see_no' => 'required',
            'school_name' => 'required',
        ]);
        $student = Students::create([
            'student_name' => request('student_name'),
            'email' => request('email'),
            'contact_no' => request('contact_no'),
            'see_no' => request('see_no'),
            'school_name' => request('school_name'),
            'uniqueid' => Str::random(10),
            'marks' => 0,
            'total' => 50,
            'ip_address' => $request->ip(),
            'date' =>  Carbon::now()->format('Y')
        ]);
        $student_id = $student->student_name;
        $student_unique_id = $student->uniqueid;
        $english = Questions::where('course_name', 'English')->get()->random(25);
        $math = Questions::where('course_name', 'Mathematics')->get()->random(25);
        $collection = collect([$english,$math ]);
        $collapsed = $collection->collapse();
        $questions = $collapsed->all();
        $countedQuestion = 50;
        return view('give-exam.answersheet')->with(compact('questions', 'student_id', 'student_unique_id','countedQuestion'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function answer()
    {
        return view('give-exam.answer');
    }
}
