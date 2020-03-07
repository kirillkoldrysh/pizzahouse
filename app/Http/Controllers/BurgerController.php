<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BurgerController extends Controller
{
    public function index()
    {
        $burgers = [
            ['type' => 'hamburger', 'price' => '12,99'],
            ['type' => 'gunburger', 'price' => '13,99'],
            ['type' => 'cheeseburger', 'price' => '10,59'],
            ['type' => 'vegburger', 'price' => '11,19'],
        ];

        return view('burgers', [
            'burgers' => $burgers,
        ]);
    }
}
