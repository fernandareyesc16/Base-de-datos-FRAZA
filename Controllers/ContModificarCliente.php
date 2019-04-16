<?php
require_once("../Models/Clientes.php");
$cliente = new Clientes();
$id_cliente = $_GET['id_cliente'];
$row = $cliente->buscarCliente($id_cliente);

for ($i = 0; $i < count($row); $i++){
  $nombre_cliente = $row[$i]['nombre_cliente'];
  $apellido_cliente = $row[$i]['apellido_cliente'];
  $correo = $row[$i]['correo'];
  $direccion = $row[$i]['direccion'];
  $telefono = $row[$i]['telefono'];
}

require_once("../Views/ModificarCliente.php");

?>
 
