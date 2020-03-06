@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Test page
        </div>
        <p>{{ $type }} - {{ $base }} - {{ $price }}</p>
        @if ($price > 40) 
            <p>This pizza is too expensive</p>
        @elseif ($price > 20)
            <p>This pizza is normally priced</p>
        @else
            <p>This pizza is cheap</p>
        @endif

        @unless ($base == 'cheesy crust')
            <p>You don't have cheesy crust</p>
        @endunless

        @php
            $user = "Marco";
            echo $user;
        @endphp

        @for ($i = 0; $i < 5; $i++)
            <p>The value of i is: {{ $i+1 }}</p> 
        @endfor

        @for ($i = 0; $i < count($pizzas); $i++)
            <p>{{ $pizzas[$i]['type'] }} - {{ $pizzas[$i]['base'] }} - {{ $pizzas[$i]['price'] }}</p>
        @endfor
    </div>
</div>
@endsection
