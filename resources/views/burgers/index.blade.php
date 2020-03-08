@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">Burgers page</div>
        
        @foreach ($burgers as $burger)
            <p><a href="burgers/{{ $burger->id }}">{{ ($loop->index + 1) }}) {{ $burger['type'] }} - {{ $burger['price'] }}$</a></p>
        @endforeach

        <a href="/">Back to the main page</a>
    </div>
</div>

@endsection