@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">Add a new burger</div>
        <form action="/burgers" method="post" class="main-form">
            @csrf
            <label for="type">Type: </label>
            <select name="type" id="type">
                <option value="Hamburger">Hamburger</option>
                <option value="Cheeseburger">Cheeseburger</option>
                <option value="Big Mac">Big Mac</option>
                <option value="Vegburger">Vegburger</option>
            </select>
            <label for="name">Name: </label>
            <input type="text" name="name" id="name">
            <label for="price">Price: </label>
            <input type="number" name="price" id="price">
            <input type="submit" name="submit" value="Order">
        </form>
    </div>
</div>

@endsection