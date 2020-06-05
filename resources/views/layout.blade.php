<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<meta charset="utf-8">
	  <meta content="width=device-width, initial-scale=1.0" name="viewport">

	  <title>@yield('title')</title>
	  <meta content="" name="description">
	  <meta content="" name="keywords">

	  <!-- Favicons -->
	  <link href="assets/img/favicon.png" rel="icon">
	  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	  <!-- Google Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	  <!-- Vendor CSS Files -->
	  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" type="/css/app.css" >
	  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
	  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

	  <!-- Template Main CSS File -->
	  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
	<header>
		<?php function activeMenu($url){
			return request()->is($url) ? 'active' : '';
		}?>	


		<nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>

			@guest
					@else
		
						@if (auth()->user()->hasRoles(['admin'])){{-- verificacion de usuario para mostrar el link--}}

							<li class="nav-item">
								<a class=" nav-link " href="{{route('usuarios.index')}}">
									usuarios
								</a>
							</li>

						@endif

			@endguest


		@guest {{-- hacer login de usuario muestre en la lista de navegacion login si no ha iniciado sessión, en caso contrario muestra cerrar session --}}
				<li class="active" data-toggle="collapse"> 
					<a class="nav-link" href="{{route('login')}}"> 
						login
					</a> 
				</li> {{--link de referencia a login generado por auth--}}
							

			@else

				<li class="nav-item dropdown">
			       	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			       		{{auth()->user()->name}}
			       	</a>
			     	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			       		<a class="nav-link" href="#" onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
							cerrar sesión
						</a>{{--si se hace click llama a al formulario de nombre 'logout-form' para cerrar sesión --}}
		    	</li>


			@endguest

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				@csrf
			</form> 

					<li class="nav-item">
						<a class=" nav-link " href="{{route('mensajes.create')}}">
							Contacto
						</a>
					</li>

        </ul>
      </nav><!-- .nav-menu -->







	</header>


	<div class="container">

		@yield('contenido') {{--para linkear desde el otro archivo con @section('')--}}
		<footer>Copyright {{ date('Y')}}</footer>

	</div>
	{{--<script src="/js/app.js"></script>--}}
	 <script src="/js/bootstrap.js"></script> 
	 <script src="/js/jquery.js"></script>

</body>
</html>