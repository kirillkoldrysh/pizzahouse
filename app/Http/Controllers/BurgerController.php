<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Burger;

class BurgerController extends Controller
{
    public function index()
    {
        $burgers = Burger::all();

        return view('burgers.index', [
            'burgers' => $burgers,
        ]);
    }

    public function show($id)
    {
        $burger = Burger::find($id);
        return view('burgers.show', [
            'burger' => $burger,
        ]);
    }

    public function create()
    {
        return view('burgers.create');
    }

    public function store()
    {
        $burger = new Burger();
        $burger->type = request('type');
        $burger->name = request('name');
        $burger->price = request('price');

        $burger->save();
        return redirect('/')->with('mssg', 'Thanks for everything, what you have done for me');
    }
}
