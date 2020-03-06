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

Route::get('/pizzas', function () {
    // get the data from database
    $pizzas = [
        ['type' => 'hawaii', 'base' => "cheesy crust", 'price' => '10'],
        ['type' => 'volcano', 'base' => "garlic crust", 'price' => '40'],
        ['type' => 'veg supreme', 'base' => "thin & crispy", 'price' => '70'],
    ];

    $name = request('name');
    $age = request('age');

    return view('pizzas', [
        'pizzas' => $pizzas,
        'name' => $name,
        'age' => $age,    
    ]);
});

Route::get('/pizzas/{id}', function ($id) {
    return view('details', [
        'id' => $id,
    ]);
});
