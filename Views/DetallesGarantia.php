


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
	<title>Taller Fraza - Detalles garantía</title>

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
	<link rel="stylesheet" href="/ProyectoPro/css/style.css">

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
 												<li><a href="../Controllers/ContAgregarUsuario.php"> Empleados</a></li>
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
              		 <h1 class="wow fadeIn" data-wow-delay="0.6s" id="garantia" >Detalles garantía, Garantía <?php echo $modelo, " ",  $marca, " ", $numSerie; ?></h1>


           		</div>
			</div>

		</div>
	</div>
</section>


<!-- Detalles garantía
================================================== -->
<?php

require_once("../Models/cfg.php");
require_once("../Models/Crud.php");
$crud = new Crud();



?>
<section id="DetallesGarantia">
   <div class="container">
      <div class="row">


 <form name="form" method="post" action ="../Controllers/ContDetallesGarantia.php"></form>


    <div>

    </div>
    <div>

    </div>

		"<table border ='1' cellspacing='2' cellpadding='10'>
		<tr>
		<th>Fase</th>
		<th>Encargado</th>
		<th>Fecha de inicio</th>
		<th>Duración (días)</th>
		<th>Comentario</th>
		</tr>

    <?php

        for ($i = 1; $i < count($rows); $i++) {
					$empleadoid = intval($rows[$i]['empleado_encargado']);
					$sql1 = "SELECT nombre, apellido from empleado where id = $empleadoid ";
					$nombreEmpleado =$crud->getData($sql1);
					if(is_array($nombreEmpleado)){
						foreach ($nombreEmpleado as $res){
							$nomEmpleado = $res['nombre'];
							$apeEmpleado = $res['apellido'];
						}
					}

					$formatDate = $crud->getData('SELECT DATE_FORMAT(fecha_inicio, "%d /%m /%Y") fecha_inicio from fase_garantia');
					if(is_array($formatDate)){
						foreach ($formatDate as $res){
							$fechaFormateada= $res['fecha_inicio'];

						}
					}

          echo '<td style="width:20%">' . $rows[$i]['nombre_fase'] . "</td>";
          //echo '<td style="width:20%">'. $rows[$i]['id_garantia'] .'</td>';
          echo '<td style="width:20%">'. $nomEmpleado .' ' . $apeEmpleado . '</td>';
          echo '<td style="width:20%">'. $fechaFormateada .'</td>';
          echo '<td style="width:20%">'. $rows[$i]['duracion'] .'</td>';
          echo '<td style="width:20%">'. $rows[$i]['comentario'] .'</td>';
          echo "</tr>";

        }

				echo '<form name="form" method="post" action ="../Views/UsarGarantia.php?id_garantia=' . $id_garantia . '">
				<input type="submit" name="Agregar" value="Agregar fase" id="btn_agr"></form></td>';
          ?>



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
