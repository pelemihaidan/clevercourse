<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    function index(){

        return view('pages.courses');

    }
}
