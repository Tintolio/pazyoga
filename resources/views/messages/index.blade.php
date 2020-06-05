@extends('layout')

@section ('contenido')

	<h1>.|.</h1>

	<table class="table">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Email</th>
				<th>Mensaje</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($messages as $message)
				<tr>
					<td> <a href="{{route('mensajes.show',$message->id)}}">{{$message -> nombre}}</td></a>
					<td> {{$message -> email}}</td>
					<td> {{$message -> mensaje}}</td>
					<td> 
						<a class="btn btn-info btn-xs" href="{{route('mensajes.edit',$message->id)}}"> editar</a>
						<form style="display: inline;"  method="POST" action="{{route('mensajes.destroy',$message->id)}}">
							@csrf
							@method ('DELETE')
							
							<button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>




@endsection
