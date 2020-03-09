<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('base', 'desc')->get();
        // $pizzas = Pizza::where('type', 'hawaiian')->get();
        $pizzas = Pizza::latest()->get();

        $name = request('name');
        $age = request('age');

        return view('pizzas.index', [
            'pizzas' => $pizzas,
            'name' => $name,
            'age' => $age,    
        ]);
    }

    public function show($id)
    {
        $pizza = Pizza::find($id);
        return view('pizzas.show', [
            'pizza' => $pizza,
        ]);
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store()
    {
        $pizza = new Pizza();
        $pizza->name = request('name') ?? '';
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->price = request('price') ?? 0;
        $pizza->topings = request('topings') ?? [];

        $pizza->save();

        return redirect('/')->with('mssg', 'Thanks for your order');
    }

    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
