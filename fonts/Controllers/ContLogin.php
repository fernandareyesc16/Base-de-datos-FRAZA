<?php
require_once("../Models/cfg.php");
require_once("../Models/Crud.php");

$crud = new Crud();



$sql = $crud->getData("SELECT * FROM empleado WHERE username='$username' and contrasena='$contrasena'");
$sql1= $crud->getData("SELECT rol FROM empleado WHERE username='$username' and contrasena = '$contrasena'");
header("Location: homepage.php");






 ?>
