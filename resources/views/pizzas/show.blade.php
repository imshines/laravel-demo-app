@extends('layouts.app')
@section('content')
    <div class="conatainer-fluid">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1>Your Cart {{$pizza->name}}</h1>
        <p>Type - {{$pizza->type}}</p>
        <p>Base - {{$pizza->base}}</p>
        <ul>
            Toppings 
            @foreach ($pizza->toppings as $topping)
            <li>
                {{$topping}}
            </li>
            @endforeach
        </ul>
        </div>
    <form action="{{route('pizzas.destroy', $pizza->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Complete Order</button>
        </form>
    </div>
<a href="{{route('pizzas.index')}}">Go Home</a>
@endsection