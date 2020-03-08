@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Add a new pizza
        </div>
        <form action="/pizzas" method="post" class="main-form">
            @csrf
            <label for="name">Name: </label>
            <input type="text" id="name" name="name">
            <label for="type">Type: </label>
            <select name="type" id="type">
                <option value="margherita">Margherita</option>
                <option value="polo">Polo</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="volcano">Volcano</option>
            </select>
            <label for="base">Base of pizza: </label>
            <select name="base" id="base">
                <option value="cheesy crust">Cheesy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin & chrispy">Thin & Chrispy</option>
                <option value="thick">Thick</option>
            </select>
            <label for="price">Price: </label>
            <input name="price" id="price" type="number">

            <input type="submit" id="submit" value="Order Pizza">
            <fieldset>
                <label for="toppings">Extra toppings</label>
                <input type="checkbox" name="topings[]" value="mushrooms">Mushrooms<br />
                <input type="checkbox" name="topings[]" value="tomatoes">Tomatoes<br />
                <input type="checkbox" name="topings[]" value="ananas">Ananas<br />
                <input type="checkbox" name="topings[]" value="extra cheese">Extra cheese<br />
            </fieldset>
        </form>
    </div>
</div>
@endsection