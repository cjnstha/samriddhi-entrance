<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function index()
    {
        $q = request('q');
        if ($q != NULL) {
            $students = Students::where('uniqueid',$q)
                ->orderBy('marks','desc')
                ->get();
        }
            return view('students.getresults',compact('students'));
        }
    }
