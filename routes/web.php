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

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');

Route::resource('goals', 'GoalsController');
Route::resource('milestones', 'MilestonesController');
Route::resource('types', 'TypesController');
Route::resource('progresses', 'ProgressesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
