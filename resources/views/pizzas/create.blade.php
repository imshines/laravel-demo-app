@extends('layouts.app')
@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h1>Create new pizza</h1>
        <form action="/pizzas" method="POST">
        @csrf
        <div>
        <div>
            <label>Enter your name</label>
            <input type="text" name="name" />
        </div>
        <div>
            <label>Choose type</label>
            <select type="text" name="type">  
                <option>Veg</option>
                <option>Tofu</option>
                <option>Chicken</option>
                <option>Mushroom</option>
            </select>
        </div>
        <div>
            <label>Choose base</label>
            <select type="text" name="base">
                <option>Cheese</option>
                <option>Plain</option>
                <option>Flat</option>
            </select>
        </div>
        <div>
            <fieldset>
                <label>Toppings</label>
                <br/>
                <input type="checkbox" name="toppings[]" value="Extra cheese">Extra Cheese<br/>
                <input type="checkbox" name="toppings[]" value="Broccoli">Broccoli<br/>
                <input type="checkbox" name="toppings[]" value="Tomato">Tomato<br/>
                <input type="checkbox" name="toppings[]" value="Olives">Olives<br/>
            </fieldset>
        </div>
            <button class="btn btn-primary" type="submit">Add</button>
        </div>
        </form>
    </div>
@endsection