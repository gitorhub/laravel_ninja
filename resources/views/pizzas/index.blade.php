@extends('layouts/app')
@section('content')

<div class="container">
    <div class="col-12">
        <div class="row d-flex justify-content-around">
            @foreach ($pizzas as $pizza)
            <div class="col-4 p-2">
                <div class="card text-center border border-secondary">
                    <img src="/img/muhsin logo.png" alt=" logo icon" class="all-image">

                    <div class="card-body">
                        <div>
                            <h5 class="card-title">Order for: {{$pizza->name}}</h5>
                            <p>Type: {{$pizza->type}}</p>
    

                        </div>


                        <a href="{{route('pizzas.show',$pizza->id)}}" class="btn btn-primary">Show details</a>
                    </div>
                </div>

            </div>

            @endforeach

        </div>
    </div>
    <div class="d-flex justify-content-around ">
        <a href="/" class="bg-danger text-white btn">Home</a>
        <a href="/pizzas" class="bg-danger text-white btn">All Pizzas</a>
        <a href="/pizzas/" class="bg-danger text-white btn">First pizza</a>
        <a href="/pizzas/create" class="bg-danger text-white btn">Create Pizza</a>
    </div>



</div>


@endsection
