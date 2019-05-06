



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
	<link rel="stylesheet" href="/Base-de-datos-FRAZA/css/style.css">

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
<?php $id_garantia = $_GET['id_garantia']; ?>
<section id="header" class="header-four">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
            	<div class="header-thumb">
              		 <h1 class="wow fadeIn" data-wow-delay="0.6s" id="tituloUsar">Usar garantía <?php echo $id_garantia ?> : insertar datos</h1>

           		</div>
			</div>

		</div>
	</div>
</section>


<!-- Usar garantía
================================================== -->
<?php
require_once("../Models/Crud.php");
require_once("../Models/cfg.php");
$crud = new Crud();
$fases = $crud->getData("SELECT nombre_fase FROM fase");
$nombreEncargado = $crud->getData("SELECT nombre, apellido from empleado where valido = 1");
?>

<section id="UsarGarantia">
   <div class="container">
      <div class="row">

  <form action="../Controllers/ContInsertaFase.php?id_garantia=<?php echo $id_garantia ?>" method="post" name="form1">

      </div >
      <div id="selectFase">
      Seleccione la fase: <select name="Fase">
      <?php
          foreach ($fases as $res) {
          //while($res = mysqli_fetch_array($result)) {
              echo '<option value="'.$res['nombre_fase'].'">'.$res['nombre_fase'].'</option>"';
                 }
       ?>
      	</select>
        </div>
      <!--<input type="submit" name="submitFase" value="Get Selected Value" />-->

      <div id="selectEncargado">

          Seleccione el encargado: <select name="Encargado">
        <?php
            foreach ($nombreEncargado as $res) {
            //while($res = mysqli_fetch_array($result)) {
                echo '<option value="'.$res['nombre'].'">'.$res['nombre'].' '.$res['apellido'].'</option>"';
                   }
         ?>
          </select>

      </div>
      </div>
      <div>
        
         <p id="txtIni">Fecha de inicio:</p> <input id="txt_fechaini" type="date" name="txt_fechaini"/>
      </div>
      <div>
          
        <p id="txtDura">Duración:</p>  <input id="box_dura" type="textbox" name="duracion" placeholder="Número de días">
      </div>
      <div>
        
       <p id="txtComen">Comentarios:</p>   <textarea rows="4" cols="50" name="comentario" id="textareaUsar">Escriba aquí...</textarea>
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
