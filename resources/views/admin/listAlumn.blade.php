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
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>nivel</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                      </thead>
                  <tbody>
                  @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->datos->nombre}}</td>
                            <td>{{$user->datos->apellido}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->datos->nivel}}</td>
                            <td>{{$user->role->display_name}} </td>
                            <td> 
                            {{dd($user->id)}}

                          <a class="btn btn-info btn-xs"
                           data-toggle="modal" data-target="#edituser"
                           href={{route('edit',$user->id)}}
                                > editar</a>
                          {{--
                          <form style="display: inline;"  method="POST" 
                                action="{{route('administrador.destroy',$user->id)}}">
                            @csrf
                            @method ('DELETE')
                           <button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
                          </form>
                          --}}
                          </td> 
                        </tr>
                 @endforeach
                </tbody>
                      </table>
            </div>

            <!-- Button trigger modal       """""ref=route('administrador.edit',$user->id)  "" -->

<!-- Modal -->
<div class="modal fade" id="edituser" tabindex="-1" role="dialog" aria-labelledby="edituser" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edituser">Editar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include('admin.edit')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

        </div>
    </div>
</div>


@endsection


