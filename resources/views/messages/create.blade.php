@extends ('layout')


@section('contenido')

	<h1>Contactos</h1>

	<h2>Escribenos</h2>


	@if(session()->has('info'))
		<h3>{{session('info')}}</h3>
	@else

		<form method="POST" action="{{route('mensajes.store')}}">
		@csrf
		<label for="nombre">
			Nombre
			<input class="form-control" type="text" name="nombre" value="{{old('nombre')}}">
			{{$errors->first('nombre')}}
		</label>
		<br>

		<label for="email">
			Email
			<input class="form-control" type="email" name="email" value="{{old('email')}}">
			{{$errors->first('email')}}
		</label>
		<br>
		<label for ="email">
			mensaje:
			<textarea  class="form-control" name="mensaje">{{old('mensaje')}}</textarea>
			{{$errors->first('mensaje')}}
		</label>
		<br>
		<input class="btn btn-primary" type="submit" value="Enviar">

		</form>

	@endif
@stop