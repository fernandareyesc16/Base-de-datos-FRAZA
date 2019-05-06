<?php
require_once("../Models/cfg.php");
require_once("../Models/Crud.php");
$empleado = new Crud(/*$username,$contrasena*/);
$id_empleado = intval($_GET['id']);
$row = $empleado->getData("SELECT * FROM empleado WHERE id=$id_empleado");

//echo '<link rel="stylesheet" href="css/style.css">';
//print_r( $row);
foreach ($row as $res){
  $usuario = $res['username'];
  $nombre_empleado = $res['nombre'];
  $apellido = $res['apellido'];
  $rol = $res['rol'];
  $valido = $res['valido'];
}

require_once("../Views/ModificarUsuario.php");

?>
