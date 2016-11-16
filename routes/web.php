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

Route::get('/actores', 'ActorController@directory');

Route::get('/actor/{id}', 'ActorController@show');

Route::get('/actores/buscar', 'ActorController@search');

Route::get('/actores/agregar', 'ActorController@add');
Route::post('/actores/agregar', 'ActorController@store');

Route::get('/actor/{id}/editar', 'ActorController@edit');
Route::post('/actor/{id}/editar', 'ActorController@update');

Route::post('/actor/{id}/delete', 'ActorController@delete');
