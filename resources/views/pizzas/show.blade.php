@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            @if (isset($pizza))
                Pizza: {{ $pizza->type }} - {{ $pizza->base }} - {{ $pizza->name }}
                <p>Price: {{ $pizza->price }}</p>
            @else
                Pizza is not found
            @endif
        </div>
        <a href="/pizzas">Back to all pizzas</a>
    </div>
</div>
@endsection