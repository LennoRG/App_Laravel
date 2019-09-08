<nav>
        <ul>
               <li class="{{ setActive('home') }}"><a href="{{route('home')}}">@lang('Home')</a></li> 
               <li class="{{ setActive('about') }}"><a href="{{route('about')}}">@lang('About')</a></li>
               <li class="{{ setActive('projects.*') }}"><a href="{{route('projects.index')}}">@lang('Projects')</a></li>
               <li class="{{ setActive('contact') }}"><a href="{{route('contact')}}">@lang('Contact')</a></li>
              
               @guest
                      <li><a href="{{route('login')}}">Login</a></li> <!--ruta de login-->

               @else
                    <li>
                       <a href="#"  onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">Cerrar Sesion</a>

                    </li>
               @endguest  
        </ul>
      
  </nav>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> <!-- cerrar session, se copio del formato app.blade.php-->
       @csrf
   </form>
