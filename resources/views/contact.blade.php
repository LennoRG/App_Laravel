@extends('layout')

@section('title', 'Contact')
    
@section('contect')


    @include('partials.session-status')

    <div class="container">
       <div class="row">
           <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <form class="bg-white shadow rouded py-3 px-4" 
                method="POST" action="{{route('messages.store')}}">
                @csrf  <!-- Siempre poner esta directiva en los fomularios-->
               <h1 class="display-4">@lang('Contact')</h1>
               
              <div class="form-group">
                    <label for="name">Nombre</label>
                   <!-- otra forma de mostrar los errores {!! $errors->first('name', '<small>:message</small><br>') !!}-->
                    <input class="form-control bg-ligth shadow-sm @error('name') is-invalid @else  border-0  @enderror"
                        id="name" name="name" placeholder="Nombre" value="{{ old('name')}}">
                        @error('name')
                           <span class="invalid-feedback" roles="alert">
                                <strong>{{$message}}</strong>
                           </span>
                        @enderror
              </div>
                    
              <div class="form-group">
                          <label for="name">E-mail</label>
                          <input class="form-control bg-ligth shadow-sm @error('email') is-invalid @else  border-0  @enderror"
                              id="email" name="email" placeholder="Correo Electronico..." value="{{ old('email')}}">
                              @error('email')
                                 <span class="invalid-feedback" roles="alert">
                                      <strong>{{$message}}</strong>
                                 </span>
                              @enderror
              </div>
  
              <div class="form-group">
                              <label for="subject">Asunto</label>
                              <input class="form-control bg-ligth shadow-sm @error('subject') is-invalid @else  border-0  @enderror"
                                  id="subject" name="subject" placeholder="Asunto..." value="{{ old('subject')}}">
                                  @error('subject')
                                     <span class="invalid-feedback" roles="alert">
                                          <strong>{{$message}}</strong>
                                     </span>
                                  @enderror
              </div>
  
              <div class="form-group">
                      <label for="content">Contenido</label>
                      <textarea class="form-control bg-ligth shadow-sm @error('subject') is-invalid @else  border-0  @enderror"
                          id="content" name="contect" placeholder="Escribe aqui el contenido de su mensaje..."> {{ old('content')}}
                      </textarea>
                      @error('content')
                             <span class="invalid-feedback" roles="alert">
                                  <strong>{{$message}}</strong>
                             </span>
                       @enderror
              </div>
              
  
              <button class="btn btn-primary btn-lg btn-block">Enviar</button>
          </form>
           </div>
       </div>
         
    </div>

@endsection