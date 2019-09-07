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