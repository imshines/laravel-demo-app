@extends('layouts.app')
@section('content')
        <div class="">
            <div class="">
                <div class="h1">
                    Pizzas
                </div>
                @foreach ($pizzas as $pizza)
                <div>
                <a href="{{route('pizzas.show', $pizza->id)}}">
                    <p>{{ $pizza->id }} - {{ $pizza->type }} for {{$pizza->name}}</p>
                </a>
                </div>
                @endforeach
                <p>{{session('msg')}}</p>
            </div>
        </div>
@endsection
