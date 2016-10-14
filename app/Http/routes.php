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

Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/prueba', 'Prueba\PruebaController@index');
    Route::post('/prueba', 'Prueba\PruebaController@store');

    Route::get('/cadena', 'Cadena\CadenaController@index')->name('cadenaHome');
    Route::post('/cadena', 'Cadena\CadenaController@store');

    Route::get('/cadena/{id}', 'Cadena\CadenaController@editor')->where('id', '[0-9]+');
    Route::delete('/cadena/{id}', 'Cadena\CadenaController@destroy')->where('id', '[0-9]+');

    Route::get('/home', 'HomeController@index');

});

Route::auth();
