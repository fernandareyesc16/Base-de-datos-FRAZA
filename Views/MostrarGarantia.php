


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
	<title>Taller Fraza- Garantías</title>

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
<section id="header" class="header-four">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
            	<div class="header-thumb">
              		 <h1 class="wow fadeIn" data-wow-delay="0.6s">Garantías</h1>


           		</div>
			</div>

		</div>
	</div>
</section>


<!-- Garantías
================================================== -->
<section id="clientes">
   <div class="container">
      <div class="row">
<?php

require_once("../Models/cfg.php");
require_once("../Models/Crud.php");
//header("Location:../Views/MostrarGarantia.php");
$crud = new Crud(/*$username,$contrasena*/);

  $rows = $crud->getData("SELECT * from garantia");

//formatea fecha de creación
	$formatDate = $crud->getData('SELECT DATE_FORMAT(fecha_creacion, "%d /%m /%Y") fecha_creacion from garantia');
	if(is_array($formatDate)){
		foreach ($formatDate as $res){
			$fechaFormateadaC= $res['fecha_creacion'];

		}
	}

	//formatea fecha de terminación
	$formatDateT = $crud->getData('SELECT DATE_FORMAT(fecha_terminacion, "%d /%m /%Y") fecha_terminacion from garantia');
	if(is_array($formatDateT)){
		foreach ($formatDateT as $res){
			$fechaFormateadaT= $res['fecha_terminacion'];

		}
	}

   echo '<div style="overflow-x:auto;">';
   echo "<table border ='1' cellspacing='2' cellpadding='10'>
   <tr>
   <th>Cliente</th>
   <th>Fecha Creación</th>
   <th>Fecha Terminación</th>
   <th>Número de serie de Maquinaria</th>
   <th>Reparaciones</th>
	 <th>Validez</th>
   <th>Fase</th>
   </tr>";

				for ($i = 0; $i < count($rows); $i++) {
			 		 echo '<tr style="width:20%">';
			 		 //Busca el nombre y apellido del cliente con el id del cliente de la garantía[i]
			 		 $clienteid = intval($rows[$i]['cliente']);
			 		 $sql1 = "SELECT nombre_cliente, apellido_cliente from cliente where id_cliente = $clienteid ";
			 		 $nombreCliente =$crud->getData($sql1);
			 		 if(is_array($nombreCliente)){
			 			 foreach ($nombreCliente as $res){
			 				 $nomClient = $res['nombre_cliente'];
			 				 $apeClient = $res['apellido_cliente'];
			 			 }
			 		 }

			 		 echo '<td style="width:20%">' . $nomClient . " " . $apeClient . "</td>";

					 $fC= $rows[$i]['fecha_creacion'];

			 		 echo '<td style="width:15%">' . $fechaFormateadaC . "</td>";

			 		 $id_garantia = intval($rows[$i]['id']);
			 		 //Busca el número de serie con el id de la maquinaria de la garantia[i]
			 		 $maqid = intval($rows[$i]['maquinaria']);
			 		 $sql = "SELECT numero_de_serie from maquinaria where id_maquinaria = $maqid ";
			 		 $nombreMaq =$crud->getData($sql);
			 		 if(is_array($nombreMaq)){
			 			 foreach ($nombreMaq as $res){
			 				 $numSerie = $res['numero_de_serie'];
			 			 }
			 		 }

			 		 echo '<td style="width:15%">' . $fechaFormateadaT . "</td>";
			 		 echo '<td style="width:20%">' . $numSerie . "</td>";
			 		 echo '<td style="width:20%">' . $rows[$i]['num_reparaciones'] . "</td>";
					 if ($rows[$i]['valida'] == 1)
						 echo '<td style="width:10%">Válida</td>';
					 else{
						 echo '<td style="width:10%">Inválida</td>';
					 }
			 		 echo '<td style="width:20%"><a href="../Controllers/ContDetallesGarantia.php?id_maquinaria= ' . $maqid . '&id_garantia= ' . $id_garantia . '">Ver detalles</a>';
			 		 echo "</tr>";
			  }
			  echo "</table>";
			  echo "</div>";
				?>

        <form action= "../Controllers/ContAgregarGarantia.php"><input type="submit" value="Agregar nueva garantía" id="agregar_garantias"></form>



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
