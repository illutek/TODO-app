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

Route::get('/', 'TodoController@index')->name('index');
Route::get('completed', 'TodoController@completed')->name('completed');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::get('create', 'TodoController@create')->name('create');
//Route::post('create', 'TodoController@store')->name('store');

//Route::delete('delete/{id}', 'TodoController@destroy')->name('destroy');

Route::resource('todo', 'TodoController');