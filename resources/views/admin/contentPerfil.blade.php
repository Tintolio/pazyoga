@extends('dashboardAdmin')

@section('cuerpo')

<div class="row">
  
  
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/damir-bosnjak.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
        
<label>C</label>
 @if(is_null($user->datos)) {{--verifica que el valor de la variable no sea null--}}
      <input type="text" class="form-control" disabled="" name="nombre" value="Nombre"> 
            @else
                          <input type="text" class="form-control" disabled="" name="nombre" value="{{$user->datos->nombre}} "> 
                          {{$errors->first('nombre')}}
                        @endif
                                           
                  </a>
                  <p class="description">
                 
                  </p>
                </div>
                <p class="description text-center">
                  i love yoga<br>
                </p>
              </div>

            </div>

          </div>
  
<div class="row">

    <form method="POST" action="{{route('update')}}">
      @method('PUT')
      @csrf

      <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Datos del usuario</h5>
              </div>
              
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      

                      <div class="form-group">
                        <label>Nombre</label>
                        @if(is_null($user->datos)) {{--verifica que el valor de la variable no sea null--}}
                          <input type="text" class="form-control" placeholder="Company" name="nombre" value="Nombre"> 
                        @else
                          <input type="text" class="form-control" placeholder="Company" name="nombre" value="{{$user->datos->nombre}} "> {{--para acceder a los datos tienes que llamar a la variable $user->datos->x     cambiar x por el nombre de la columna, de la tabla datos_usuarios--}}
                          {{$errors->first('nombre')}}
                        @endif
                      </div>


                    </div>
                    <div class="col-md-5 pl-1">
                      <div class="form-group">
                        <label>Apellido</label>
                        @if(is_null($user->datos ))
                          <input type="text" class="form-control" placeholder="Company" name="apellido" value="Apellido"> 
                        @else
                          <input type="text" class="form-control" placeholder="Company" name="apellido" value="{{$user->datos->apellido }} "> {{--para acceder a los datos tienes que llamar a la variable $user->datos->x     cambiar x por el nombre de la columna, de la tabla datos_usuarios--}}
                          {{$errors->first('apellido')}}
                        @endif
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>fecha nacimiento</label>
                        <input type="date" class="form-control" value="Melbourne">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                          <label>Sexo</label>
   <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown link
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Mujer</a>
    <a class="dropdown-item" href="#">Hombre</a>
  </div>
</div>

                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Telefono</label>
                        <input type="number" class="form-control" placeholder="+56 9 0">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <input class="btn btn-primary" type="submit" value="Actualizar">
                    </div>
                  </div>
                </form>
              </div>
            </div>
      </div>

      </form>
  </div>
</div>

    @if(session()->has('info'))
      <div class="alert alert-success">{{session ('info')}}</div>
    @endif
@endsection