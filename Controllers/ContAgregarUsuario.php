<?php

require_once("../Views/AgregarUsuario.php");


  if(isset($_POST['but_submit'])){
    $nombreE = $_POST['nombre'];
    $apellidoE= $_POST['apellido'];
    $rolE = $_POST['rol'];
    $usernameE = $_POST['username'];
    $contrasenaE = $_POST['password'];

      require_once("../Models/Crud.php");
      $nuevo = new Crud();
      $insertaUsuario = $nuevo->execute("INSERT INTO empleado (nombre, apellido, rol, username, contrasena,valido) VALUES('$nombreE', '$apellidoE', '$rolE', '$usernameE', '$contrasenaE',1)");
      echo "Empleado agregado exitosamente";
      echo "<form action='../Controllers/ContMostrarUsuarios.php'><input type='submit' name='but_regresar' value = 'Regresar' /></form>";

}
?>
