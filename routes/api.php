<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Goals REST routing
Route::get('goals', 'GoalsapiController@index');
Route::get('goals/{goal}', 'GoalsapiController@show');
Route::post('goals', 'GoalsapiController@store');
Route::put('goals/{goal}', 'GoalsapiController@update');
Route::delete('goals/{goal}', 'GoalsapiController@destroy');

// Milestones REST routing
Route::get('milestones', 'MilestonesapiController@index');
Route::get('milestones/{milestone}', 'MilestonesapiController@show');
Route::post('milestones', 'MilestonesapiController@store');
Route::put('milestones/{milestone}', 'MilestonesapiController@update');
Route::delete('milestones/{milestone}', 'MilestonesapiController@destroy');

// Types REST routing
Route::get('types', 'TypesapiController@index');
Route::get('types/{type}', 'TypesapiController@show');
Route::post('types', 'TypesapiController@store');
Route::put('types/{type}', 'TypesapiController@update');
Route::delete('types/{type}', 'TypesapiController@destroy');

// Progresses REST routing
Route::get('progresses', 'ProgressesapiController@index');
Route::get('progresses/{progress}', 'ProgressesapiController@show');
Route::post('progresses', 'ProgressesapiController@store');
Route::put('progresses/{progress}', 'ProgressesapiController@update');
Route::delete('progresses/{progress}', 'ProgressesapiController@destroy');