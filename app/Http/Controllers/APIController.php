<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Questions;
use DB;
use App\Merge;
use Illuminate\Support\Str;

class APIController extends Controller
{
    /**
     * @param Survey $survey
     * @param Teacher $teacher
     * @return mixed
     */

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    // public function getStudents()
    // {
    //     $data = Student::latest()->get();
    //     return response()->json($data);
    // }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getSets()
    {
        $data = \DB::table('questions')
                ->where('course_name',request('course_name'))
                ->select('set_name')
                ->groupBy('set_name')
                ->get();
                return $data;
        return view('api.getsets',compact('data'));
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCourse()
    {
        $data = \DB::table('questions')
            ->where('course_name',request('set_name'))
            ->select('set_name')
            ->groupBy('set_name')
            ->get();
        return view('api.getcourse',compact('data'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function getQuestions()
    
    {
         $questions = \DB::table('questions')
            ->where('course_name',request('subject_name'))
            ->where('set_name',request('set_name'))
            ->get();
        return view('api.mergequestions',compact('questions'));
    }

       /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function getsecondQuestions()
    
    {
         $questions = \DB::table('questions')
                        ->where('course_name',request('subject_name'))
                        ->where('set_name',request('set_name'))
                        ->get();
        return view('api._getsecondquestion',compact('questions'));
    }

    /**
     * @param Survey $survey
     * @param Teacher $teacher
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */


    public function mergeQuestions()
    {
        $first_value =  request('firstquestion');
        $second_value = request('secondquestion');
        $first =  json_decode($first_value);
        $second =  json_decode($second_value);
        $collection = collect([$first,$second ]);
        $collapsed = $collection->collapse();
        $collections = $collapsed->all();

        $string = Str::random(5);

        foreach($collections as $value) {
            Merge::create([
            'questions' => $value->questions,    
            'collection' => request('collection'),
            'unique_id' => $string,
            'choice1' => $value->choice1,
            'choice2' => $value->choice2,
            'choice3' => $value->choice3,
            'choice4' => $value->choice4,    
            'answers' => $value->answers       
            ]);
        }
        return $string;
    }
}

