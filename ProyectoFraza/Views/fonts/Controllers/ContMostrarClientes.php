<?php
require_once("../Models/cfg.php");
require_once("../Models/Crud.php");
$new= new Crud(/*$username, $contrasena*/);
$row = $new->getData("SELECT * FROM cliente");
header("Location:../Views/MostrarClientes.php");


?>
