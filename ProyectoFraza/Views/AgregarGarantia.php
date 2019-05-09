

      <!doctype html>
<html>
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
	<title>Taller Fraza - Agregar Garantía</title>

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
                         <li><a href="../Controllers/ContMostrarUsuarios.php"> Empleados</a></li>
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
<section id="header" class="header-four">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
            	<div class="header-thumb">
              		 <h1 class="wow fadeIn" data-wow-delay="0.6s">Agregar Garantía</h1>

           		</div>
			</div>

		</div>
	</div>
</section>


<!-- Agregar Garantía
================================================== -->
<?php
require_once("../Models/Crud.php");
require_once("../Models/cfg.php");
$crud = new Crud();
$nombreCliente = $crud->getData("SELECT id_cliente, nombre_cliente, apellido_cliente FROM cliente");
//$nombreEncargado = $crud->getData("SELECT nombre, apellido from empleado where valido = 1");
?>
<section id="Garantías">
   <div class="container">
      <div class="row">

          <form action="../Controllers/ContAgregarGarantia.php" name='form' method='post'>

      <div>

        <div>
       <h3 id="datos">Datos de Maquinaria: </h3>
     </div>
     <div>
         <input type="text" class="textbox" id="txt_modelo" name="txt_modelo" placeholder="Modelo" />

     </div>
     <div>
         <input type="text" class="textbox" id="txt_numero_de_serie" name="txt_numero_de_serie" placeholder="Numero de Serie" />
     </div>
     <div>
         <input type="text" class="textbox" id="txt_marca" name="txt_marca" placeholder="Marca" />
     </div>


      </div>
    <h3 id="txt_titulo">Datos adicionales: </h3>
      <div id="cliente">
        Cliente: <select name="Cliente" >
          <?php
              foreach ($nombreCliente as $res) {
              //while($res = mysqli_fetch_array($result)) {
                  echo '<option value="'.$res['id_cliente'].'">'.$res['nombre_cliente'].' '.$res['apellido_cliente'].'</option>"';
                     }
           ?>

              </select>

      </div>

      <div>

         <h3 id="txt_fechaT">Fecha de terminación:</h3>  <input type="date" class="textbox" id="txt_fecha_terminacion" name="txt_fecha_terminacion" placeholder="fecha de terminación" />
      </div>

      <div>
          <input id="btn_ag" type="submit" name="but_submit" value = "Agregar" />
      </div>
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
