@extends('layouts/app')
@section('content')

<div class="container p-5">


    <div class="col-6 card text-center bg-dark text-white">
        <div class="card-header">
        Pizza Order Details: {{$pizza->id}}
        </div>
        <div class="card-body">
          <h5 class="card-title">Order for: {{$pizza->name}}</h5>
          <p>Type: {{$pizza->type}}</p>

          <div>
            Base:
            @foreach ($pizza->base as $b)
            <span class="px-2"> {{$b}} </span>            
            @endforeach
          </div>   
        </div>
        <div class="card-footer text-white">
          Order Date:{{$pizza->created_at}}
          <div>
            @foreach ($pizza->toppings as $topping)
            <span class="px-2"> {{$topping}} </span>            
            @endforeach
          </div>
        </div>

        <div class="text-center">
          <form action="{{route('pizzas.destroy',$pizza->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-success mt-2"> Complete Order</button>        
          </form>
        </div>

      </div>  

    </div>
</div>
<div class="d-flex justify-content-around ">
  <a href="/" class="bg-danger text-white btn">Home</a>
  <a href="/pizzas" class="bg-danger text-white btn">All Pizzas</a>
  <a href="/pizzas/1" class="bg-danger text-white btn">First pizza</a>
  <a href="/pizzas/create" class="bg-danger text-white btn">Create Pizza</a>
</div>

@endsection
