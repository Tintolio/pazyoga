       <ul>
          <li class="active"><a href="#header">Home</a></li>

      @guest
          @else
    
            @if (auth()->user()->hasRoles(['Admin'])){{-- verificacion de usuario para mostrar el link--}}

              <li class="nav-item">
                <a class=" nav-link " href="{{route('dashboardAdmin')}}"> 
                  Dashboard :3

                </a>
              </li>

              @elseif (auth()->user()->hasRoles(['User'])){{-- verificacion de usuario para mostrar el link--}}
              <li class="nav-item">
                <a class=" nav-link " href="{{route('dashboardAlum')}}"> 
                  Plataforma Usuario

                </a>
             </li>

            @endif

      @endguest
    @guest {{-- hacer login de usuario muestre en la lista de navegacion login si no ha iniciado sessión, en caso contrario muestra cerrar session --}}
        <li class="active" data-toggle="collapse"> 
          <a class="nav-link" href="{{route('login')}}"> 
            login
          </a> 
        </li> {{--link de referencia a login generado por auth--}}
      @else
        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{auth()->user()->name}}
              </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="nav-link" href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              cerrar sesión
            </a>{{--si se hace click llama a al formulario de nombre 'logout-form' para cerrar sesión --}}
          </li>
      @endguest
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form> 
          <li><a href="#contact">Contacto</a></li>
        </ul>
