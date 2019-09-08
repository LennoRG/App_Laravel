@extends('layout')

@section('title', 'Home')
    

@section('contect')
    <h1>{{  __('Home') }}</h1>

    @auth
          {{ auth()->user()->name  }} <!--me devuelve llos datos del usuario registrado y logueado-->
        
    @endauth
    

@endsection