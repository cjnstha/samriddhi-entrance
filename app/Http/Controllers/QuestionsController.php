<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questions;
use App\ExamInfo;
use DB;
use App\Merge;

class QuestionsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('makequestion.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function store(Request $request)
    {
        $question = new Questions;
        $question = Questions::create([
            'set_name' => request('set_name'),
            'course_name' => request('course_name'),
            'question_unique' => request('uniqueid'),
            'questions' => request('questions'),
            'choice1' => request('choice1'),
            'choice2' => request('choice2'),
            'choice3' => request('choice3'),
            'choice4' => request('choice4'),
            'answers' => request('answers')
        ]);

        $set = request('set_value');

        $qustionCount = Questions::where('question_unique', '=',request('uniqueid'))->count(); // Scope not clear only counting the set A or B
        $selectLenth = ExamInfo::where('id', '=', $set)->value('question_length'); //Gives total question length

        if ($qustionCount < $selectLenth) {
            $examinfo = ExamInfo::find($set);
            return view('makequestion.create', ['examinfo' => $examinfo]);
        } else {
            // $uniqueId=Examinfo::where('id','=',$id)->value('uniqueid');
            return view('entrance.index');
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function mergeQuestion()
    {
        return view('merge.questions');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function getmergeQuestions(Request $request)
    {
        $set = Questions::where('set_name', $request)->orderBy('set_name')->get();
        $first = Questions::where('set_name', $set)->where('course_name', 'English')->get();
        $second = Questions::where('set_name', $set)->where('course_name', 'Mathematics')->get();
        $collection = collect([$first, $second]);

        $merge = Merge::create([
            'question' => request($collection)
        ]);
        return $merge;
    }
}
