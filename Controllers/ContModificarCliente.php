<?php
require_once("../Models/cfg.php");
require_once("../Models/Crud.php");
$cliente = new Crud($username,$contrasena);
$id_cliente = intval($_GET['id_cliente']);
$row = $cliente->getData("SELECT * FROM cliente WHERE id_cliente=$id_cliente");

//print_r( $row);
foreach ($row as $res){
  $nombre_cliente = $res['nombre_cliente'];
  $apellido_cliente = $res['apellido_cliente'];
  $correo = $res['correo'];
  $direccion = $res['direccion'];
  $telefono = $res['telefono'];
}

require_once("../Views/ModificarCliente.php");

?>
