<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonController extends Controller
{
    function index($course_id, $lesson_id){
        $data = array(
            'course_id' => $course_id,
            'lesson_id' => $lesson_id
        );
        //dd($data);
        return view('pages.lesson', compact('data'));
    }
}
