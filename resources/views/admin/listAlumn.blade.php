@extends('dashboardAdmin')

@section('cuerpo')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Simple Table</h4>
        </div>
            <div class="card-body">
               <div class="table-responsive">
                      <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>nombre</th>
                            <th>Apellido</th>
                            <th>nivel</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                      </thead>
                  <tbody>
                  @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}} </td>
                            <td>{{$user->datos->nombre}}</td>
                            <td>{{$user->datos->apellido}}</td>
                            <td>{{$user->datos->nivel}}</td>
                            <td> 
                              

                    <button type="button" class="btn btn-primary" 
                              data-toggle="modal" data-target="#EditarAli"  
                              href={{route('updateUser',$user->id )}}>
                                editar
                    </button>

                          
                          </td> 
                        </tr>
                 @endforeach

                </tbody>
                      </table>
            </div>

            <!-- Button trigger modal       """""ref=route('administrador.edit',$user->id)  "" -->




<!-- Modal -->
<div class="modal fade" id="EditarAli" tabindex="-1" role="dialog" aria-labelledby="EditarAli" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="EditarAli">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include('admin.edit')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
</div>


@endsection


