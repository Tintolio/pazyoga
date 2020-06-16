@extends('dashboardAdmin')
@section('cuerpo')

<div class="col-sm-12">

                   @if ($errors->any())

                       <div class="alert alert-danger">

                           <button type="button" class="close" data-dismiss="alert">×</button>

                           <ul>

                               @foreach ($errors->all() as $error)

                                   <li>{{ $error }}</li>

                               @endforeach

                           </ul>

                       </div>

                   @endif

                   @if (Session::has('success'))

                       <div class="alert alert-info">

                           <button type="button" class="close" data-dismiss="alert">×</button>

                           <p>{{ Session::get('success') }}</p>

                       </div>

                   @endif

</div>


<div >

                       <form action="{{ route('subirVideo') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">

                           {{ csrf_field() }}

                           <div class="custom-file">

                               <input class="custom-file-input" type="file" name="image" id="image">
                               <label class="custom-file-label" for="image">subir archivo</label>

                           </div>

                           <div class="form-group">

                               <button type="submit" class="btn btn-primary">Upload</button>

                           </div>

                       </form>
</div>



@endsection