<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ResultsController extends Controller
{
    public function index()
    {
        $dates = Students::select('created_at')
            ->get()
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('Y');
            });

        return view('students.getresults', compact( 'dates'));
    }

    public function ajaxFilter()
    {
        $q = request('year');
        if ($q != NULL) {
            $students = Students::select('student_name', 'email', 'contact_no', 'marks', 'created_at','total')
                ->where('date', $q)
                ->get();
        }
        return view('api._getfilterresults',compact('students'));
    }
}
