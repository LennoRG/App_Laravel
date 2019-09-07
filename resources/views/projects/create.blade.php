@extends('layout')

@section('title', 'Crear Proyecto')
    

@section('contect')
    <h1>Crear un nuevo proyecto</h1>

    @include('partials.validation-errors')

    <form method="POST" action="{{route('projects.store')}}">
        @csrf

        @include('projects._form')
        
        <button>Guardar</button>

    </form>

@endsection