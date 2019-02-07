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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/');

Route::get('/create/subject', 'SubjectController@create');
Route::post('/create/subject', 'SubjectController@store');
Route::get('/create/teacher', 'AdminController@create');
Route::post('/create/teacher', 'AdminController@store');
Route::get('/create/student', 'StudentController@create');
Route::post('/create/student', 'StudentController@store');

Route::get('/class/{studentclass_id}/mid-term', 'TeacherController@createMidterm');
Route::get('/dashboard', 'TeacherController@index');

Route::get('/subject/{subject}', 'TeacherController@show');
Route::get('/subject/{subject_id}/first/class/{studentclass_id}', 'FirsttermController@create');

Route::get('/subject/{subject_id}/second/class/{studentclass_id}', 'SecondtermController@create');
Route::post('/subject/{subject_id}/second/class/{studentclass_id}', 'SecondtermController@store');
Route::patch('/subject/{subject_id}/second/class/{studentclass_id}', 'SecondtermController@update');
//Route::get('/dashboard', function(){
//    dd(Config::get('myVariables'));
//});
Route::name('admin')->group(function (){
//    Route::get('')
});


