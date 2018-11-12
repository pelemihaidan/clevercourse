<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'CoursesController@index');

Route::get('/{course_id}', 'LessonsController@index');

Route::get('/{course_id}/{lesson_id}', 'LessonController@index');
