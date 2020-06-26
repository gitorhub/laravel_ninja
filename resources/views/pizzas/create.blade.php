@extends('layouts/app')

@section('content')

<div class="container d-flex justify-content-center p-5">
    <form class="border border-secondary col-6" action="{{route('pizzas.store')}}" method="POST">
        @csrf
        {{-- //crossside request forgery  maksatlı  --}}

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="name">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select class="form-control" id="type" name="type">
                <option>modern</option>
                <option>classic</option>
                <option>older</option>
                <option>future</option>
            </select>
        </div>
        <div class="form-group">
            <label for="base">Base</label>
            <select multiple class="form-control" id="base" name="base[]">
                <option>oliven</option>
                <option>cheese</option>
                <option>nuty</option>
                <option>kababi</option>
            </select>
        </div>
        <div class="form-group">
            <label>Toppings</label> <br>
            <input type="checkbox" name="toppings[]" value="green">Breen <br>
            <input type="checkbox" name="toppings[]" value="pink">pink <br>
            <input type="checkbox" name="toppings[]" value="purple">purple <br>
            <input type="checkbox" name="toppings[]" value="blue">blue <br>
        </div>
        <div class="form-group">
            <input type="submit" value="Order Pizza" class="form-control bg-success text-white">
        </div>
    </form>
</div>

<div class="d-flex justify-content-around ">
    <a href="/" class="bg-danger text-white btn">Home</a>
    <a href="/pizzas" class="bg-danger text-white btn">All Pizzas</a>
    <a href="/pizzas/1" class="bg-danger text-white btn">First pizza</a>
    <a href="/pizzas/create" class="bg-danger text-white btn">Create Pizza</a>
</div>
@endsection
