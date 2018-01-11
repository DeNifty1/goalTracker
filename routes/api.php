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
Route::delete('goals/{goal}', 'GoalsapiController@delete');