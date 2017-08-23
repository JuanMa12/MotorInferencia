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

Route::get('/', function () { return view('condicionales/home'); });

Route::get('/index/{value}','CondicionalController@index');
Route::post('/year','CondicionalController@year');
Route::post('/datos','CondicionalController@datos');
Route::post('/valor','CondicionalController@valor');
Route::post('/tipo','CondicionalController@tipo');
