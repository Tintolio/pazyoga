
	<div class="container" id="app">
		@if(session()->has('info'))
			<div class="alert alert-success">{{session ('info')}}</div>
		@endif

		<form method="POST" action="{{route('administrador.edit',$user->id)}}">
			@method('PUT')
			@csrf
			<label for="Nombre">
				Nombre
				<input class="form-control" type="text" name="name" value="{{$user->name}}">
				{{$errors->first('name')}}
			</label>
			<br>

			<label for="apellido">
				apellido
				<input class="form-control" type="apellido" name="apellido" value="{{$user->apellido}}">
				{{$errors->first('apellido')}}
			</label>
			
			<label for="apellido">
				nivel
				<input class="form-control" type="text" name="nivel" value="{{$user->nivel}}">
				{{$errors->first('nivel')}}
			</label>

			<input class="btn btn-primary" type="submit" value="Actualizar">
		</form>
	</div>