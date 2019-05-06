



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
	<title>Taller Fraza - Modificar Cliente</title>

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
                        <li><a href="../Controllers/ContMostrarUsuarios.php">Empleados</a></li>
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
              		 <h1 class="wow fadeIn" data-wow-delay="0.6s" id="tituloModificar">Modificar un cliente</h1>

           		</div>
			</div>

		</div>
	</div>
</section>


<!-- Modifical Cliente
================================================== -->
<section id="Garantías">
   <div class="container">
      <div class="row">


            <form name="form" method="post" action ="../Controllers/ContUpdateCliente.php">
      </div>
      <div>
      <p id="p1"> Nombre:</p> <input type="text" class="textbox" id="txt_nombreM" name="txt_nombre" value="<?php echo $nombre_cliente; ?>" required>
       <p id="p1"> Apellidos:</p><input type="text" class="textbox" id="txt_apellidoM" name="txt_apellido" value="<?php echo $apellido_cliente; ?>" required>
      <div>
       <p> Correo:</p><input type="text" class="textbox" id="txt_correoM" name="txt_correo" value="<?php echo $correo; ?>">
      </div>
      <div>
         <p> Dirección:</p><input type="text" class="textbox" id="txt_direccionM" name="txt_direccion" value="<?php echo  $direccion; ?>">
      </div>
      <div>
      <p> Teléfono:</p><input type="text" class="textbox" id="txt_telefonoM" name="txt_telefono" value= "<?php echo $telefono; ?>">
      </div>
      <div>
      <input type="hidden" name= "id_cliente" value=<?php echo $_GET['id_cliente'];?>>
    </select>
  <!--<input type="submit" name="submitFase" value="Get Selected Value" />-->

  <div id="estado">

      <p id="txtEstado">Estado:</p> <select name="Estado">

            <option value="1">Activo</option>
              <option value="0">Desactivo</option>

            </select>


      </div>
        <input id="btn_act" type="submit" name="but_actualizar" value = "Actualizar" /></form>
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
