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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tasks/{filter}', 'HomeController@filtered')->name('task-filtered');

Route::get('/task/create', 'TasksController@create')->name('task-create');
Route::post('/task/store', 'TasksController@store')->name('task-store');

Route::get('/task/edit/{task}', 'TasksController@edit')->name('task-edit');
Route::post('task/update', 'TasksController@update')->name('task-update');

Route::get('/task/complete/{task}', 'TasksController@complete')->name('task-complete');

Route::get('task/delete/{task}', 'TasksController@delete')->name('task-delete');

Auth::routes();
