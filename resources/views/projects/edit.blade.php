@extends('layout')

@section('title', 'Editar Proyecto')
    

@section('contect')
    <h1>Editar proyecto</h1>

    @include('partials.validation-errors')

    <form method="POST" action="{{ route('projects.update', $project) }}">
        @csrf 
        
        @method('PATCH')
        
        @include('projects._form')

        <button>Actualizar</button>
        

    </form>

@endsection