<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hola/{nombre}', function ($nombre) {
    //return "Hola : " . $nombre;
    return "Hola : {$nombre}";
});



Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@store');

Route::post('/acceso', 'LoginController@store');



Route::get('/index', 'PostsController@index');
Route::get('/index/{id}', 'PostsController@show');

