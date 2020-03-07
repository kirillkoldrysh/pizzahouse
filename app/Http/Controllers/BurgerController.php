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
        $burger = Burger::where('id', $id)->get();
        return view('burgers.show', [
            'burger' => $burger[0] ?? null,
        ]);
    }

    public function create()
    {
        return view('burgers.create');
    }
}
