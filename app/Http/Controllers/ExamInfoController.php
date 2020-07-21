<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Examinfo;
use Illuminate\Support\Str;

class ExamInfoController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('entrance.index');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function store()
    {
        $examinfo = Examinfo::create([
            'teacher_name' => auth()->user()->name,
            'course' => request('course'),
            'set' => request('set'),
            'question_length' => request('question_length'),
            'time' => request('time'),
            'uniqueid' => Str::random(10)
        ]);
        return view('makequestion.create', ['examinfo' => $examinfo]);
    }
}
