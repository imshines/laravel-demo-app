<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        // $pizzas = Pizza::orderBy('id', 'desc')->get();
        // $pizzas = Pizza::where('base', 'cheesy')->get(); 
        // $pizzas = Pizza::latest->get(); 
        $pizzas = Pizza::all();
        return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    public function show($id)
    {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create()
    {
        $pizzas = Pizza::all();
        return view('pizzas.create', ['pizzas' => $pizzas]);
    }

    public function store()
    {
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();

        return redirect('/')->with('msg', 'Order placed!');
    }

    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas')->with('msg', 'Order Completed!');
    }
}
