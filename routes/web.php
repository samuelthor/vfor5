<?php


Route::get('/', function () {});
Route::get('/home', function () {});
Route::get('/threads', 'ThreadsController@index');
Route::get('/threads/create', 'ThreadsController@create');
Route::get('/threads/{id}', 'ThreadsController@show');

Route::get('/', function(){
  return redirect('/home');
});
