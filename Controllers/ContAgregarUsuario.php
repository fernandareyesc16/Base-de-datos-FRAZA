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
      $insertaUsuario = $nuevo->execute("INSERT INTO empleado (nombre, apellido, rol, username, contrasena) VALUES('$nombreE', '$apellidoE', '$rolE', '$usernameE', '$contrasenaE')");
      //$sql ="CREATE USER '$usernameE'@'localhost' IDENTIFIED BY '$contrasenaE'";
      //$nuevoUsuario = $nuevo->execute($sql);
      //$sql1= "GRANT 'empleado' TO '$usernameE'@'localhost'";
      //$nuevo->execute($sql1);
      //$sql2= "SET DEFAULT rol empleado to '$usernameE'@'localhost'";
      //$nuevo->execute($sql2);
      echo "Empleado agregado exitosamente";
      echo "<form action='../Controllers/homepage.php'><input type='submit' name='but_regresar' value = 'Regresar' /></form>";

}
?>
