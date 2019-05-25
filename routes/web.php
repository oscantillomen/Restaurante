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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/i', 'IngredientsController@store');
Route::get('/i/create', 'IngredientsController@create');
Route::get('/i/{ingredient}/edit', 'IngredientsController@edit')->name('ingredient.edit');
Route::patch('/i/{ingredient}', 'IngredientsController@update')->name('ingredient.update');
