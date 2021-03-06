@extends('dashboardAdmin')
@section('cuerpo')



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/styles.css">


 

<div class="container">

    <div class="card">


      <div class="card-body">

            <form method="POST" action="{{ route('subirVideo') }}" enctype="multipart/form-data">

                @csrf

                <div class="forma">
                    <input name="file" id="file" type="file" class="form-control"><br/>

                    <div class="progress">

                        <div class="bar"></div >

                        <div class="percent">0%</div>

                    </div>

                    <input type="submit"  value="Submit" id="file" class="btn btn-success">
                </div>

            </form>    

      </div>

    </div>

</div>

 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>

<script src="http://malsup.github.com/jquery.form.js"></script>

 

<script type="text/javascript">

 

    function validate(formData, jqForm, options) {

        var form = jqForm[0];

        if (!form.file.value) {

            alert('File not found');

            return false;

        }

    }

 

    (function() {

 

    var bar = $('.bar');

    var percent = $('.percent');

    var status = $('#status');

 

    $('form').ajaxForm({

        beforeSubmit: ,

        beforeSend: function() {

            status.empty();

            var percentVal = '0%';

            var fileValue = $('input[name=file]').fieldValue();

            bar.width(percentVal)

            percent.html(percentVal);

        },

        uploadProgress: function(event, position, total, percentComplete) {

            var percentVal = percentComplete + '%';

            bar.width(percentVal)

            percent.html(percentVal);

        },

        success: function() {

            var percentVal = 'Wait, Saving';

            bar.width(percentVal)

            percent.html(percentVal);

        },

        complete: function(xhr) {

            status.html(xhr.responseText);

            alert('Uploaded Successfully');

            window.location.href = "/subVideo";

        }

    });

     

    })();

</script>




@endsection