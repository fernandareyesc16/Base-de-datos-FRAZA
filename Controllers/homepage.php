<!DOCTYPE html>
<?php
require_once("../Models/cfg.php")
 ?>
<html lang="en">
<head>
<!--

Template 2082 Pure Mix

http://www.tooplate.com/view/2082-pure-mix

-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Site title
   ================================================== -->
	<title>Fraza - Homepage</title>

	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="css/animate.min.css">

	<!-- Font Icons CSS
   ================================================== -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">

	<!-- Main CSS
   ================================================== -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Google web font
   ================================================== -->
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

</head>
<body>


<!-- Preloader section
================================================== -->
<div class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- Navigation section
================================================== -->
<div class="nav-container">
   <nav class="nav-inner transparent">

      <div class="navbar">
         <div class="container">
            <div class="row">



              <div class="navicon">
                <div class="menu-container">

                  <div class="circle dark inline">
                    <i class="icon ion-navicon"></i>
                  </div>

                  <div class="list-menu">
                    <i class="icon ion-close-round close-iframe"></i>
                    <div class="intro-inner">
                     	<ul id="nav-menu">
                      <li><a href="../Controllers/homepage.php">Inicio</a></li>
                       <li><a href="../Views/MostrarClientes.php">Clientes</a></li>
                        <li><a href="../Views/MostrarGarantia.php">Garantias</a></li>
                        <li><a href="../Views/AgregarUsuario.php">Agregar empleado</a></li>
                        <li><a href="../Views/login.php">Cerrar sesión</a></li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>

            </div>
         </div>
      </div>

   </nav>
</div>


<!-- Homepage
================================================== -->
<section id="header" class="header-one">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">

            	<div class="header-thumb2">
              		 <h1 class="wow fadeIn" data-wow-delay="0.6s">Taller Fraza</h1>

           		</div>

                 <a href="../Controllers/ContMostrarClientes.php" class="btn btn-default" id="btn-clientes">Clientes</a>
                <a href="../Views/MostrarGarantia.php" class="btn btn-default" id="btn-garantia">Garantías</a>
                <?php

                if($rol == "director" || $rol == "Director"){
                  echo '<a href="../Views/AgregarUsuario.php" class="btn btn-default" id="btn-empleado">Agregar empleado</a>';
                }

                ?>


                <a href="../Views/Login.php" class="btn btn-default" id="btn-cerrar">Cerrar sesión</a>
			</div>

		</div>
	</div>
</section>





<!-- Javascript
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
