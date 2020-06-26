@extends('layouts/app')

@section('content')

<div class="flex-center position-ref full-height">
    {{-- @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>
    @endif --}}

    <div class="content">
        <img src="/img/muhsin logo.png" alt="logo muhsin" width="50%">


        <div class="title m-b-md">
            The Worlds Best Pizzas
        </div>
        @if (session('mssg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('mssg')}}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>            
        @endif

        <div class="d-flex justify-content-around ">
            <a href="/" class="bg-danger text-white btn">Welcome Page</a>
            <a href="/pizzas" class="bg-danger text-white btn">All Pizzas</a>
            <a href="/pizzas/1" class="bg-danger text-white btn">First pizza</a>
            <a href="/pizzas/create" class="bg-danger text-white btn">Create Pizza</a>
        </div>


    </div>
</div>

@endsection
