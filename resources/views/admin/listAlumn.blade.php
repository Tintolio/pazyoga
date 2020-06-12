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
        <th>Email</th>
          <th>Role</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach ($users as $user)
        
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->role->display_name}} </td>
           <td> 
            <a class="btn btn-info btn-xs" href="{{route('administrador.edit',$user->id)}}"> editar</a>
            <form style="display: inline;"  method="POST" action="{{route('administrador.destroy',$user->id)}}">
              @csrf
              @method ('DELETE')
              
              <button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
            </form>
          </td> 
        </tr>

      @endforeach


    </tbody>
  </table>

</div>
</div>
</div>
</div>


@endsection


