@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center">
    <div>
    <p>{{session('msg')}}</p>
    <div class="title m-b-md">
        Order Pizzas
    </div>
    <a href="{{route('pizzas.create')}}">Order here!</a>
    </div>
</div>
</div>
@endsection
