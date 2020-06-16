@extends('dashboardAlumn')

@section('cuerpoAlumn')
          

          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/damir-bosnjak.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                    <h5 class="title">Chet Faker</h5>
                  </a>
                  <p class="description">
                 
                  </p>
                </div>
                <p class="description text-center">
                  "I like the way you work it <br>
                  No diggity <br>
                  I wanna bag it up"
                </p>
              </div>
              <div class="card-footer">
                <hr>
                <div class="button-container">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 ml-auto">
                      <h5>12<br><small>Files</small></h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                      <h5>2GB<br><small>Used</small></h5>
                    </div>
                    <div class="col-lg-3 mr-auto">
                      <h5>24,6$<br><small>Spent</small></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>









    <form method="POST" action="{{route('updateAlu')}}">
      @method('PUT')
      @csrf

      <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
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

                  </div>
<div class="row">
	                    <div class="col-md-5 pl-1">
                      <div class="form-group">
                        <label>Telefono</label>
                        <input type="text-center" class="form-control" placeholder="+56 9 0">
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
        

    @if(session()->has('info'))
      <div class="alert alert-success">{{session ('info')}}</div>
    @endif






@endsection