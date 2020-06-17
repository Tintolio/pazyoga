@extends('dashboardAdmin')

@section('cuerpo')

{{--dd($videos)--}}	
<div>
	<table>
		<thead>
			<tr>
				<th>nombre</th>
			</tr>
		</thead>
		<tbody>

			@foreach($videos as $video)
				
					<tr>
						<td>

							<a href="{{$video['src']}}">{{$video['name']}}</a>
							

							{{--
							<video width="640" height="360" controls>
  								<source src="{{$video['src']}}" type="video/mp4">
  									Tu navegador no soporta HTML5 video.
							</video>
							--}}
						
						</td>
					</tr>
	
			@endforeach
		</tbody>
	</table>
</div>



<div>
	

	


</div>






@endsection