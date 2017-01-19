<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', function () {
    return view('todo');
});

Route::get('processes', 'ProcessController@index');
Route::get('processes/{process}', 'ProcessController@show')->name('process');
Route::post('processes', 'ProcessController@store');

Route::get('procedures', 'ProcedureController@index');
Route::get('procedures/{procedure}', 'ProcedureController@show')->name('procedure');
Route::post('procedures/{process}', 'ProcedureController@store');

Route::post('procedures/{process}/assign', 'ProcedureController@storePovit' );


Route::post('procedures/{procedure}/steps', 'StepController@store');

Auth::routes();

Route::get('/home', 'HomeController@index');
