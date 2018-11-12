<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonsController extends Controller
{
    function index($course_id){

        return view('pages.lessons')->with('course_id', $course_id);

    }
}
