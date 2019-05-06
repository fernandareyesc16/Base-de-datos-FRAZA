<?php
require_once("../Models/cfg.php");
require_once("../Models/Crud.php");
$new= new Crud(/*$username, $contrasena*/);
$row = $new->getData("SELECT * FROM empleado");
header("Location:../Views/MostrarUsuarios.php");


?>
