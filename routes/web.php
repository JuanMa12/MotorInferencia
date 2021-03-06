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

// Route::get('/', function () { return view('condicionales/home'); });
//
// Route::get('/index/{value}','CondicionalController@index');
// Route::post('/year','CondicionalController@year');
// Route::post('/datos','CondicionalController@datos');
// Route::post('/valor','CondicionalController@valor');
// Route::post('/tipo','CondicionalController@tipo');

Route::get('/difusse', 'DifusseController@index');
Route::get('/graph', 'DifusseController@graph');
Route::get('/animals', 'AnimalController@index');
Route::get('/first', 'AnimalController@first');
Route::get('/reglas', 'AnimalController@listAnimals');

Route::get('/bark', 'AnimalController@bark');
Route::get('/extinction', 'AnimalController@extinction');
Route::get('/rodent', 'AnimalController@rodent');
Route::get('/jump', 'AnimalController@jump');
Route::get('/stripes', 'AnimalController@stripes');
Route::get('/mount', 'AnimalController@mount');
Route::get('/flying', 'AnimalController@flying');
Route::get('/glasses', 'AnimalController@glasses');

Route::get('/', function(){
  return view('neurons/index');
});

//Route::get('/', 'NeuronController@index');
Route::resource('/neuron','NeuronController');
Route::get('/numbers','NeuronController@numbers');
Route::get('/list','NeuronController@list_numbers');
Route::get('/y1','NeuronController@y1');


// Route::get('/create', 'NeuronController@create');
// Route::post('/neuron', 'NeuronController@store');
// Route::get('/neurona/:id', 'NeuronController@show');
