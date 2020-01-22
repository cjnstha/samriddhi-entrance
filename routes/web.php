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

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
// Authentication contoller
Route::get('/entrance-login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/entrance-login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
// Route::get('/account','Admin\UserController@changePassword')->middleware('auth');
// Route::patch('/account','Admin\UserController@updatePassword')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/entrance-exam','ExamInfoController@index');
Route::post('/entrance-exam','ExamInfoController@store');
//Questions Route//
Route::get('/make-question','QuestionsController@create');

Route::post('/make-question','QuestionsController@store')->name('question.store');

//Merge Question Route//
Route::get('/merge-question','QuestionsController@mergeQuestion');


//API Controller//
Route::get('/api/course','APIController@getCourse');
Route::get('/api/getresult','APIController@getQuestions');
Route::get('/api/getsecondresult','APIController@getsecondQuestions');
Route::get('/api/set','APIController@getSets');
Route::get('/api/mergequestions','APIController@getQuestions');
ROute::get('/api/getresult','APIController@getQuestions');
Route::get('/api/mergequestions','APIController@mergeQuestions');

//Question Merge Routes//
Route::get('/questions','QuestionsController@getmergeQuestions');


//AnswerSheet Routes//
Route::get('/student','StudentsController@registerForm');
Route::post('/student/answersheet','StudentsController@store');
Route::post('/answer','AnswerController@store');



Route::get('/sheet','StudentsController@answer');