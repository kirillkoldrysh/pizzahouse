@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
                <img src="/img/pizza-house.png" alt="pizza-house-logo">
        <div class="title m-b-md">
            Hello! It's Pizza time!
        </div>
        <div class="links">
            <a href="/pizzas/create">Create a pizza order</a>
            <a href="/burgers/create">Create a burger order</a>
            <a href="{{ route('pizzas.index') }}">Pizzas list</a>
            <a href="/burgers">Burgers list</a>
        </div>
        @if (null !== session('mssg'))
            <div class="l-title">
                {{ session('mssg') }}    
            </div>
        @endif
    </div>
</div>
@endsection
