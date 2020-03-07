@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">Burgers page</div>
        
        @foreach ($burgers as $burger)
        <p>{{ ($loop->index + 1) }}) {{ $burger['type'] }} - {{ $burger['price'] }}$</p>
        @endforeach
    </div>
</div>

@endsection