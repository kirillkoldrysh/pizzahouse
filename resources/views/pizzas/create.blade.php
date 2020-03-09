@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h4>Add a new pizza</h4>

    <form action="{{ route('pizzas.store') }}" method="post" class="main-form">
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
        <input name="price" id="price" class="price" type="number">

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
@endsection