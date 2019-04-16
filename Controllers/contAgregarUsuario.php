<?php
require_once("../Views/AgregarUsuario.php");
  if(isset($_POST['but_submit'])){
    require_once("../Models/Usuario.php");
    $nuevo = new Usuario();
    $asd = $nuevo->setUsuario($_POST['nombre'], $_POST['apellido'],$_POST['username'], $_POST['rol']);
    echo "Usuario agregado exitosamente";
    echo "<form action='../Controllers/homepage.html'><input type='submit' name='but_regresar' value = 'Regresar' /></form>";
}
?>
