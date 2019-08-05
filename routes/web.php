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

Route::get('/assessment1/{num}', 'AssessmentOneController@index');
Route::get('/assessment2/{str}', 'AssessmentTwoController@index');
Route::get('/assessment3/{str}', 'AssessmentThreeController@index');
Route::get('/assessment4/{str}', 'AssessmentFourController@index');
