<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/pizzas', 'PizzaController@index');
Route::get('/pizzas/create', 'PizzaController@create');
Route::get('/pizzas/{id}', 'PizzaController@show');
Route::post('/pizzas', 'PizzaController@store');
Route::delete('/pizzas/{id}', 'PizzaController@destroy');

Route::get('/burgers', 'BurgerController@index');
Route::get('/burgers/create', 'BurgerController@create');
Route::get('/burgers/{id}', 'BurgerController@show');
Route::post('/burgers', 'BurgerController@store');
