<?php
require_once("../Models/ModificarCliente.php");
$modificarcliente = new ModificarCliente();
$row = $modificarcliente->updateDetallesCliente();//llamar update de mysql 
require_once("../views/ModificarCliente.php");

?>
