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

use App\Http\Controllers\SuperheroController;

Route::get('/superheroes', 'SuperheroController@index');
Route::get('/superheroes/create', 'SuperheroController@create');
Route::post('/superheroes', 'SuperheroController@store');
Route::get('/superheroes/{superhero}', 'SuperheroController@show');
Route::get('/superheroes/{superhero}/edit', 'SuperheroController@edit');
Route::patch('/superheroes/{superhero}', 'SuperheroController@update');

Route::redirect('/', '/superheroes');
//Route::get('/', 'SuperheroController@index');
//Route::
