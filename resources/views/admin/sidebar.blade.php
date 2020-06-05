@extends('layouts.app')

@section('sidebar')
<!--Inicio de barra navegacion dashboard -->
      <div class="sidebar-wrapper">
        <ul class="nav">

          <li>
            <a href="./user.html">
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
            <a href="./tables.html">
              <i class="nc-icon nc-tile-56"></i>
              <p>Lista alumnos</p>
            </a>
          </li>

          </li>
        </ul>
      </div>
      <!-- fin barra Navegacion  lateral -->


@endsection
