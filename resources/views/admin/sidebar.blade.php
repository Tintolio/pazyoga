@extends('dashboardAdmin')

@section('barraLateral')


<!--Inicio de barra navegacion dashboard -->
        <ul class="nav">

          <li>
            <a href="./dashboardAdmin">
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
            <a href="/listAlumn">
              <i class="nc-icon nc-tile-56"></i>
              <p>Lista alumnos</p>
            </a>
          </li>

          </li>
        </ul>
      <!-- fin barra Navegacion  lateral -->
@endsection
