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

Auth::routes();

Route::get('/home', 'NoteController@index');
Route::get('/delete={id}', 'NoteController@destroy');
Route::get('/deleteComment={id}', 'CommentController@destroy');
Route::get('/update={id}', 'NoteController@edit');
Route::post('/update={id}', 'NoteController@update');
Route::post('/comment={id}', 'CommentController@store');
Route::post('/home', 'NoteController@store');
Route::get('/notes',  function () {
    return view('Notes');
});


