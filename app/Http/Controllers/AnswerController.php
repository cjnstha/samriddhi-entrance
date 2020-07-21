<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\Answers;
use App\Merge;

class AnswerController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response|string
     */
    public function store(Request $request)
    {
//        dd(request()->all());
        if ($request->ajax()) {
            $answer = Answers::create([
                'student_name' => $request->input('student_name'),
                'question' => $request->input('questions'),
                'given_answer' => $request->input('answers'),
                'true_answer' => $request->input('true_answer'),
                'student_id' => $request->input('exam_code')
            ]);
            if ($request->input('answers') == $request->input('true_answer')) {
                $insert = Students::where('uniqueid', $request->input('exam_code'))->increment('marks');
            }
            return response($answer);
        } else {
            return "ajax not done";
        }
    }

    /**
     * Ajax request to get the students result
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function reviewSolution()
    {
        $student = request('student_name');

        $examcode = request('code');

        $total_val = request('total_val');

        $studentdata = Students::where('uniqueid', $examcode)->firstOrFail();

        return view('students._reviewsolution', ['studentdata' => $studentdata, 'total_val' => $total_val]);
    }
}
