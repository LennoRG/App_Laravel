@extends('layout')

@section('title', 'Portafolio |' . $project->title)
    
@section('contect') 
   
<h1>{{$project->title}}</h1>
     
<p>{{$project->description}}</p><br>
<p>{{$project->created_at->diffForHumans()}}</p>

@endsection
