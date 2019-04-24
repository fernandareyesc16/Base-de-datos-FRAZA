


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


<!-- Header section
================================================== -->
<section id="header" class="header-four">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
            	<div class="header-thumb">
              		 <h1 class="wow fadeIn" data-wow-delay="0.6s">Detalles garantía</h1>
                    <h3 class="wow fadeInUp" data-wow-delay="0.9s"> Garantía <?php echo $modelo, " ",  $marca, " ", $numSerie; ?></h3>
              		 
           		</div>
			</div>

		</div>
	</div>		
</section>


<!-- Detalles garantía
================================================== -->
<section id="DetallesGarantia">
   <div class="container">
      <div class="row">


 <form name="form" method="post" action ="../Controllers/ContDetallesGarantia.php"></form>
     

    <div>
    <form action="../Controllers/ContMostrarGarantía.php" method="post"><input type="submit" name="Regresar" value="Regresar" id="btn_regr"></form>
    </div>
    <div>
  
    </div>

    <?php
        foreach ($rows as $key => $res) {

        echo "<table border ='1' cellspacing='2' cellpadding='10'>
        <tr>
        <th>Fase</th>
        <th>Encargado</th>
        <th>Fecha de inicio</th>
        <th>Duración</th>
        <th>Comentario</th>
        </tr>";


          echo '<td style="width:20%">' . $res['nombre_fase'] . "</td>";
          //echo '<td style="width:20%">'. $rows[$i]['id_garantia'] .'</td>';
          echo '<td style="width:20%">'. $res['empleado_encargado'] .'</td>';
          echo '<td style="width:20%">'. $res['fecha_inicio'] .'</td>';
          echo '<td style="width:20%">'. $res['duracion'] .'</td>';
          echo '<td style="width:20%">'. $res['comentario'] .'</td>';
          echo '<td style="width:20%"><form name="form" method="post" action ="../Views/UsarGarantia.php?id_garantia=' . $id_garantia . '"> <input type="submit" name="Agregar" value="Agregar" id="btn_agr"></form></td>';
          echo "</tr>";

        }
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
