@extends ('layout')

@section ('contenido')

	<h1>Editar mensaje</h1>

	<form method="POST" action="{{route('mensajes.update',$message->id)}}">
		@method('PUT')
		@csrf
		<label for="nombre">
			Nombre
			<input class="form-control" type="text" name="nombre" value="{{$message->nombre}}">
			{{$errors->first('nombre')}}
		</label>
		<br>

		<label for="email">
			Email
			<input class="form-control" type="email" name="email" value="{{$message->email}}">
			{{$errors->first('email')}}
		</label>
		<br>
		<label for ="email">
			mensaje:
			<textarea class="form-control" name="mensaje">{{$message->mensaje}}</textarea>
			{{$errors->first('mensaje')}}
		</label>
		<br>
		<input class="btn btn-primary" type="submit" value="Enviar">
	</form>

@endsection
