

	<div class="container" id="app">
		@if(session()->has('info'))
			<div class="alert alert-success">{{session ('info')}}</div>
		@endif

		<form method="POST" action="{{route('updateUser',$user->id)}}">

			@method('PUT')
			@csrf
			<label>id: {{$user->id}}</label>
			<label for="Nombre">
				Nombre
				<input class="form-control" type="nombre" name="nombre" value="{{$user->datos->nombre}}">
				{{$errors->first('nombre')}}
			</label>
			<br>

			<label for="apellido">
				apellido
				<input class="form-control" type="apellido" name="apellido" value="{{$user->datos->apellido}}">
				{{$errors->first('apellido')}}
			</label>
			
			<label for="nivel">
				nivel
				<input class="form-control" type="nivel" name="nivel" value="{{$user->datos->nivel}}">
				{{$errors->first('nivel')}}
			</label>
			<label for="role">
				
				role
				<input class="form-control" type="role" name="role" value="{{$user->role_id}}">
				{{$errors->first('role_id')}}
			</label>
			
			<input class="btn btn-primary" type="submit" value="Actualizar">

		</form>
	</div>