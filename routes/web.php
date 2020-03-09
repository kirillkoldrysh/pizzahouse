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

Route::get('/orders/pizzas', 'PizzaController@index')->name('pizzas.index')->middleware('auth');
Route::get('/pizzas/create', 'PizzaController@create')->name('pizzas.create');
Route::post('/pizzas', 'PizzaController@store')->name('pizzas.store');
Route::get('ororo/ololo/and_one_more_thing/pizzas/{id}', 'PizzaController@show')->name('pizzas.show')->middleware('auth');
Route::delete('/pizzas/{id}', 'PizzaController@destroy')->name('pizzas.destroy')->middleware('auth');

Route::get('/burgers', 'BurgerController@index');
Route::get('/burgers/create', 'BurgerController@create');
Route::get('/burgers/{id}', 'BurgerController@show');
Route::post('/burgers', 'BurgerController@store');

Auth::routes([
    'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');
