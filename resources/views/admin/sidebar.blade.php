@extends('dashboardAdmin')

@section('barraLateral')


<!--Inicio de barra navegacion dashboard -->
        <ul class="nav">

          <li>
            <a href="./admindash">
              <i class="nc-icon nc-single-02"></i>
              <p>Perfil </p>
            </a>
          </li>


          <li class="active ">
            <a href="./dashboard.html">
              <i class="nc-icon nc-bank"></i>
              <p>Videos</p>
            </a>
          </li>
          <li>
            <a href="./icons.html">
              <i class="nc-icon nc-diamond"></i>
              <p>Subir Videos</p>
            </a>
          </li>
          <li>
            <a href="/lista">
              <i class="nc-icon nc-tile-56"></i>
              <p>Lista alumnos</p>
            </a>
          </li>

          <li>
            <a href="/administrador/edit">
              <i class="nc-icon nc-tile-56"></i>
              <p>editar alumno</p>
            </a>
          </li>

          </li>
        </ul>
      <!-- fin barra Navegacion  lateral -->
@endsection
