@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        @if (isset($burger))
            <div class="title m-b-md">Burger:</div>
            <h3>{{ $burger['name'] }}</h3>
            <p><b>Type: </b>{{ $burger['type'] }}</p>
            <p><b>Price: </b>{{ $burger['price'] }}</p>
        @else
            <div class="title">This burger isn't exist</div>
        @endif
    </div>
</div>

@endsection