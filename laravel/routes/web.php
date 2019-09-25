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
Route::get('/index',"DemoController@viewIndex");
Route::get('/add-student',"DemoController@saveStudent");
Route::post('/add-student',"DemoController@updateStudent");
Route::get('/form-survey',"DemoController@viewFormSurvey");
Route::post('/add-survey',"DemoController@addSurvey");
