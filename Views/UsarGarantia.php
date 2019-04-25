



      <!DOCTYPE html>
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
	<title>Taller Fraza - Usar garantia</title>

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

              <div class="brand">
                <a href="index.html">Taller Fraza</a>
              </div>

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
                        <li><a href="../Controllers/ContMostrarClientes.php">Clientes</a></li>
                         <li><a href="../Controllers/ContMostrarGarantía.php">Garantias</a></li>
                         <li><a href="../Controllers/ContAgregarUsuario.php">Agregar empleado</a></li>
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


<!-- Header section
================================================== -->
<?php $id_garantia = $_GET['id_garantia']; ?>
<section id="header" class="header-four">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
            	<div class="header-thumb">
              		 <h1 class="wow fadeIn" data-wow-delay="0.6s">Usar garantía <?php echo $id_garantia ?> : insertar datos</h1>

           		</div>
			</div>

		</div>
	</div>
</section>


<!-- Usar garantía
================================================== -->
<section id="UsarGarantia">
   <div class="container">
      <div class="row">

   <form action="../Controllers/ContInsertaFase.php?id_garantia=<?php echo $id_garantia ?>" method="post" name="form1">
         <h3 id="texto_fase">Fase:</h3>
       <input type="textbox" class="textbox" id="txt_fase" name="txt_fase" placeholder="Escriba una de las fases" />
          <h3 id="txtDos_fase">Inspección, Reparación, Orden de piezas, Espera de piezas, Completada</h3>
      </div>
      <div>
        <h3 id="txt_encargado">Encargado:</h3>
          <input type="textbox" class="textbox" id="txt_nombre_encargado" name="txt_nombre_encargado" placeholder="Nombre" />
          <input type="textbox" class="textbox" id="txt_apellido_encargado" name="txt_apellido_encargado" placeholder="Apellido" />
      </div>
      </div>
      <div>
          <input id="txt_fechaini" type="date" name="txt_fechaini"/>
      </div>
      <div>
          <h3 id="txt_dura">Duración:</h3>
          <input id="box_dura" type="textbox" name="duracion" placeholder="Inserte número">
      </div>
      <div>
        <h3 id="txt_comen">Comentarios:</h3>
          <input id="box_comen" type="textbox" name="comment" >
      </div>
    <input id="btn_G" type="submit" name="Guardar" value="Guardar">
    </form>


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
