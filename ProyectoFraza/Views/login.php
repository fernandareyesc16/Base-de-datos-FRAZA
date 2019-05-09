<!DOCTYPE html>
  <?php
session_start();
 ?>
<html >
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Site title
   ================================================== -->
	<title>Fraza</title>

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





                </div>
              </div>

            </div>
         </div>
      </div>

   </nav>
</div>


<!-- Header section
================================================== -->
<section id="header" class="header-one">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="header-thumb3">
              <h1 class="wow fadeIn" data-wow-delay="1.1s" id="frazaLog">Taller Fraza</h1>

          </div>

                  <ul class="filter-wrapper clearfix">

                           <li><a href="#Login" class="opc-main-bg" data-filter=".login" id="btnLog">Login</a></li>

                        </ul>

			</div>

		</div>
	</div>
</section>


<!-- Login section
================================================== -->


    <section id="Login">
 	<section id="slideLogin">
<form  method="post" name="form" action="../Models/SessionConfig.php" >
<h2 id="txtIngreso">Ingreso</h2>
<h5 id="txtUsuario">Usuario</h5>  <input type="text" name="usuario" id="Utext"><br><br>
<input type="password" name="contrasena" id="Ptext"><br><br>

    <input type="submit" name="but_submit" value="Ingresar" id="login" >

    <h6 id="txtContra">Contraseña</h6>
</form>
	</section>

</section>



<!-- Javascript
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<script>
$("a[href^='#']").click(function(e) {
	e.preventDefault();

	var position = $($(this).attr("href")).offset().top;

	$("body, html").animate({
		scrollTop: position
	} /* speed */ );
});
    </script>

</body>
</html>
