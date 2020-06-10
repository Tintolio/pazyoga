@extends('dashboardAdmin')

@section('barraLateral')




<!--Inicio de barra navegacion dashboard -->
        <ul class="nav">

          <li class="{{setActive('dashboardAdmin') }}" > Perfil <a href="/contentPerfil"></a></li>
          <li class="{{setActive('listaAlumn') }}" > lista alumn <a href="/listaAlumn"></a></li>

        </ul>
      <!-- fin barra Navegacion  lateral -->
@endsection
