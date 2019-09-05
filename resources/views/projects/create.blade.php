@extends('layout')

@section('title', 'Crear Proyecto')
    

@section('contect')
    <h1>Crear un nuevo proyecto</h1>

   <!-- Otra forma para mostrar errores-->
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
                
            @endforeach
        </ul>

    @endif  <!-- Termina Otra forma para mostrar errores-->

    <form method="POST" action="{{route('projects.store')}}">
        @csrf

        <label>
                Titulo del Proyecto <br>
                <input type="text" name="title">
        </label>
        <br>
        <label>
                URL del Proyecto <br>
                <input type="text" name="url">
        </label>
        <br>
        <label >
                Descripcion del Proyecto <br>
                <textarea name="description"></textarea>
        </label>
        <br>
        <button>Guardar</button>

    </form>

@endsection