<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
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
    </body>
</html>
