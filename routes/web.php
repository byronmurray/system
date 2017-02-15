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

/*All of this needs tiding up, make route resourses etc*/

Route::get('/', function () {
    return redirect('http://dubzz.co.nz/');
});

Route::get('/home', function () {
    return redirect('http://dubz.co.nz/login');
});

Route::get('/todo', function () {
    return view('todo');
});

Route::group(['middleware' => ['auth']], function() {

	Route::get('links', 'LinkController@index');

	Route::delete('steps/{step}', 'StepController@destroy')->name('steps.remove');

	Route::get('/group/{slug}', 'ProcessController@showGroupProcesses');

	Route::get('/search', 'SearchController@index');

	Route::post('groups', 'ProcessController@storeGroup');

	Route::post('groups/{process}', 'GroupController@storePovit');




	Route::get('processes', 'ProcessController@index');
	Route::get('processes/{slug}', 'ProcessController@show')->name('process');
	Route::post('processes', 'ProcessController@store');

	Route::get('procedures', 'ProcedureController@index');
	Route::get('procedures/{slug}', 'ProcedureController@show')->name('procedure');
	Route::post('procedures/{process}', 'ProcedureController@store');

	Route::post('procedures/{process}/assign', 'ProcedureController@storePovit' );
	Route::post('process/{group}', 'ProcessController@storePovit' );



	Route::post('procedures/{procedure}/steps', 'StepController@store');
	Route::patch('/step/{step}', 'StepController@update')->name('step.update');


});

Auth::routes();

