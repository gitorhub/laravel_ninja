<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){
        $pizzas=Pizza::all();
        return view('pizzas.index',['pizzas'=>$pizzas]);
    }

    public function show($id){
        $pizza=Pizza::findOrFail($id); //for 404 (find makes error)
        return view('pizzas.show',['pizza'=> $pizza]);

    }

    public function create(){
        return view('pizzas.create');
    }
    public function store(){
        $pizza=new Pizza();

        $pizza->name=request('name');
        $pizza->type=request('type');
        $pizza->base=request('base');
        $pizza->toppings=request('toppings');
        $pizza->save();

        return redirect('/')->with('mssg','Thanks for your order'); //session yerine
    }
    public function destroy($id){
        $pizza=Pizza::findorfail($id);
        $pizza->delete();
        return redirect('/pizzas');

    }

}
