<?php
require_once("Login.php");
  if(isset($_POST['but_submit'])){
    require_once("Usuario.php");

    $nuevo = new Usuarios();
    $asd = $nuevo->setUsuario($_POST['nombre'], $_POST['apellido'],$_POST['username'], $_POST['contrasena'], $_POST['rol']);
    
}
?>
