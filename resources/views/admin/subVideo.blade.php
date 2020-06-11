@extends('dashboardAdmin')
@section('cuerpo')



<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre de video</label>
    <input type="text" class="form-control" placeholder="nomombre video">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">select nivel</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select>
  </div>
<div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile">
  <label class="custom-file-label" for="customFile">subir archivo</label>
</div>



</form>


@endsection