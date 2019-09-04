@extends('layout')

@section('title', 'Portafolio')
    

@section('contect')
    <h1>Portafolio</h1>

    <ul>
        <?php foreach ($portafolio as $portafolioItem) {
            echo "<li>" . $portafolioItem['title']. "<li>";
            # code...
        }?>
    </ul>

@endsection