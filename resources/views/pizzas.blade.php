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
            <p>{{ $loop->index }}: {{ $pizza['type'] }} - {{ $pizza['base'] }} - {{ $pizza['price'] }}
            @if ($loop->first)
                <span> - first in the loop</span>
            @elseif ($loop->last)
                <span> - last in the loop</span>
            @endif
            </p>
        @endforeach
    </div>
</div>
@endsection