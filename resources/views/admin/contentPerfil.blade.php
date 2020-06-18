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

      <div class="col">
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
                      <div class="col-auto">
                        <label>fecha nacimiento</label>
                        @if(is_null($user->datos)) 
                          <input type="date" class="form-control" name="fecha_nac" value="fecha_nac"> 
                        @else
                          <input type="date" class="form-control" name="fecha_nac" value="{{$user->datos->fecha_nac}} "> 
                          {{$errors->first('fecha_nac')}}
                        @endif
                      </div>


                      <div class="col-auto">
                        <div class="form-group">
                        <label>telefono</label>
                        @if(is_null($user->datos)) 
                          <input type="text" class="form-control" name="telefono" 
                                 value="telefono"> 
                        @else
                          <input type="text" class="form-control" name="telefono" 
                                  value="{{$user->datos->telefono}} "> 
                          {{$errors->first('telefono')}}
                        @endif
                      </div>

                      </div>
                  </div>
                  <div class="row">
                    <div class="col-auto my-1">
                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                         <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>sexo.</option>
                            <option value="1">hombre</option>
                            <option value="2">mujer</option>               
                          </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <input class="btn btn-primary" type="submit" value="Actualizar">
                    </div>
                  </div>
                </form>
              </div> <!-- fin card body -->
            </div>
      </div> <!-- fin del formulario -->

      </form>
</div>



</div>

    @if(session()->has('info'))
      <div class="alert alert-success">{{session ('info')}}</div>
    @endif
@endsection