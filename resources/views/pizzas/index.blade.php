@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizzas page
        </div>

        @if (isset($name)) 
            <p>Name is: {{ $name }}</p>
        @endif
        @if (isset($age)) 
            <p>Age is: {{ $age }}</p>
        @endif
        
        @foreach ($pizzas as $pizza)
            <p>
                <a href="pizzas/{{ $pizza->id }}">{{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }} - {{ $pizza->price }}</a>
            </p>
        @endforeach
        <div class="links">
            <a href="/">Back to the main page</a>
        </div>
    </div>
</div>
@endsection