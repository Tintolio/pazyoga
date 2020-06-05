@extends('layout')

@section('contenido')
<h1>Editar usuario</h1>

	@if(session()->has('info'))
		<div class="alert alert-success">{{session ('info')}}</div>
	@endif

	<form method="POST" action="{{route('usuarios.update',$user->id)}}">
		@method('PUT')
		@csrf
		<label for="Nombre">
			Nombre
			<input class="form-control" type="text" name="name" value="{{$user->name}}">
			{{$errors->first('name')}}
		</label>
		<br>

		<label for="email">
			Email
			<input class="form-control" type="email" name="email" value="{{$user->email}}">
			{{$errors->first('email')}}
		</label>
		
		<input class="btn btn-primary" type="submit" value="Enviar">
	</form>


@endsection