@extends('layouts.layout')

@section('content')
<div class="wraper pizza-index">
    <h1>Pizzas page</h1>
    @foreach ($pizzas as $pizza)
        <div class="pizza-item">
            <img src="img/pizza.png" alt="pizza icon">
            <h4><a href="pizzas/{{ $pizza->id }}">{{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }} - {{ $pizza->price }}</a></h4>
        </div>    
    @endforeach
    <div class="links">
        <a href="/">Back to the main page</a>
    </div>
</div>
@endsection