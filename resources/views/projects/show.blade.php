@extends('layout')

@section('title', 'Portafolio |' . $project->title)
    
@section('contect') 
   
       <h1>{{$project->title}}</h1>
       <a href="{{route('projects.edit', $project)}}">Editar</a>
    
       <form method="POST" action="{{route('projects.destroy', $project)}}">
           @csrf
           @method('DELETE')

           <button>Eliminar</button>

       </form>

       <p>{{$project->description}}</p><br>
       <p>{{$project->created_at->diffForHumans()}}</p>

@endsection
