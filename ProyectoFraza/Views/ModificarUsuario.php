



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
	<link rel="stylesheet" href="/ProyectoFraza/css/style.css">

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
              		 <h1 class="wow fadeIn" data-wow-delay="0.6s" id="tituloModificar">Modificar Empleado/Usuario</h1>

           		</div>
			</div>

		</div>
	</div>
</section>


<!-- Modifical Empleado
================================================== -->
<section id="Garantías">
   <div class="container">
      <div class="row">


            <form name="form" method="post" action ="../Controllers/ContUpdateUsuario.php">

      <div>
       <p id="pempleado"> Nombre:</p><input type="text" class="textbox" id="txt_nombre" name="txt_nombre" value="<?php echo $nombre_empleado; ?>" required>
             <p id="pempleado1"> Apellido:</p><input type="text" class="textbox" id="txt_apellido" name="txt_apellido" value="<?php echo $apellido; ?>">
             <p id="pempleado1"> Rol:</p><input type="text" class="textbox" id="txt_rol" name="txt_rol" value="<?php echo  $rol; ?>">
     <p id="pempleado1"> Usuario:</p> <input type="text" class="textbox" id="txt_usuario" name="txt_usuario" value="<?php echo $usuario; ?>" required>




      </div>

      <input type="hidden" name= "id" value=<?php echo $_GET['id'];?>>
    </select>

  <div >

     <p id="txtEstado1">Estado:</p> <select name="Estado" id="estadoEmpleado">

            <option value="1">Activo</option>
              <option value="0">Desactivo</option>

            </select>
      <input id="btn_actEmpleado" type="submit" name="but_actualizar" value = "Actualizar" /></form>

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
