@extends('layout')

@section('title', 'Contact')
    


@section('contect')
    <h1>{{  __('Contact') }}</h1>


    @include('partials.session-status')


    <form method="POST" action="{{route('messages.store')}}">
        @csrf  <!-- Siempre poner esta directiva en los fomularios-->

        {!! $errors->first('name', '<small>:message</small><br>') !!}
        <input name="name" placeholder="Nombre" value="{{ old('name')}}"><br>

        {!! $errors->first('email', '<small>:message</small><br>') !!}
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>

        {!! $errors->first('subject', '<small>:message</small><br>') !!}
        <input name="subject" placeholder="Asunto" value="{{ old('subject') }}"><br>

        {!! $errors->first('contect', '<small>:message</small><br>') !!}
        <textarea name="content" placeholder="Mensaje...">{{ old('contect') }}</textarea><br>
        

        <button>Enviar</button>
    </form>

@endsection