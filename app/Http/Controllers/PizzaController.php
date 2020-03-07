<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('base', 'desc')->get();
        // $pizzas = Pizza::where('type', 'hawaiian')->get();
        $pizzas = Pizza::latest()->get();

        $name = request('name');
        $age = request('age');

        return view('pizzas', [
            'pizzas' => $pizzas,
            'name' => $name,
            'age' => $age,    
        ]);
    }

    public function show($id)
    {
        return view('details', [
            'id' => $id,
        ]);
    }
}
