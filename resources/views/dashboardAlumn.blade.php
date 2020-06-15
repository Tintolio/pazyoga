<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Perfil Alumno
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />



</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="#" class="simple-text logo-normal">
          Yoga Camila Paz
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
        <div class="sidebar-wrapper">

           <ul class="nav">
<!---->
          <li class="{{setActive('dashboardAlum') }}" >
            <a href="dashboardAlum">
                <i class="nc-icon nc-diamond"></i>
                      <p>Perfil</p></a>
          </li>

          <li class="{{setActive('verVideos') }}" >
            <a href="verVideos">
                <i class="nc-icon nc-diamond"></i>
                     <p>ver videos</p></a>
          </li>
          <li class="{{setActive('Fotos') }}" >
            <a href="Fotos">
                <i class="nc-icon nc-diamond"></i>
                     <p>Ver fotos</p></a>
          </li>
        </ul> 
        <!-- navegacion con helpera -->
      </div>
     </div>


    <div class="main-panel">
      <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
      
         @include('admin.navbarAdmin')
          </div>
    </nav>
      <!-- End Navbar -->
      <!-- contenido del perfil -->
      <div class="content">
        <div class="row">
        <!-- aqui van los yield de list alumnos - perfil - subir videos - ver  videos- listar alumnos -->
            @yield('cuerpoAlumn')
         </div>   
      </div>

      <!--fin del contenido del perfil -->
      <!-- footer -->
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">

            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Vulturcorp.cl
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

</body>

</html>