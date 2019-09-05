@extends('layout')

@section('title', 'Portafolio')
    

@section('contect')
    <h1>@lang('Projects')</h1>

    <a href="{{route('projects.create')}}"> Crear Proyecto </a>

    <ul>
        @forelse($projects as $project)
               <li><a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a>  

                <!--<br> <small>{{ $project->description}}</small> <br> -->
                <!-- formatos para ver el tiempo en que se creo o actualizo la tabla de la BD{{$project->created_at->diffForHumans()}}--> </li>
        @empty
             <li>No hay proyectos que mostrar</li>
            
        @endforelse
        {{$projects->links()}} <!-- metodo para links de paginacion -->
    </ul>

@endsection