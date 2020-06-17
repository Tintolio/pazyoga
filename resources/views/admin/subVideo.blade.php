@extends('dashboardAdmin')
@section('cuerpo')

<div>

    <form action="{{route('subirVideo')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file"  id="file" class="form-control">
        <input type="submit" class="btn btn-light rounded" id="file" value=" subir 🢁">
            

    </form>


</div>


@endsection