<?php
require_once("../Models/cfg.php");
require_once("../Models/Crud.php");
$cliente = new Crud($username,$contrasena);

if(isset($_POST['but_actualizar'])){
  $nombre =$_POST['txt_nombre'];
  $apellido = $_POST['txt_apellido'];
  $id_cliente = $_POST['id_cliente'];
  $correo =  $_POST['txt_correo'];
  $direccion =  $_POST['txt_direccion'];
  $telefono = $_POST['txt_telefono'];
  
  if ($nombre == "" || $apellido == ""){
    echo "Error: no se insertó nombre o apellido";
  }else{
    $asd = $cliente->execute("UPDATE cliente SET nombre_cliente = '$nombre', apellido_cliente='$apellido', correo='$correo', direccion='$direccion', telefono='$telefono' WHERE id_cliente=$id_cliente");

    echo "Cliente modificado exitosamente";
    echo "<form action='../Controllers/ContMostrarClientes.php'><input type='submit' name='but_regresar' value = 'Regresar' /></form>";

  }

}
?>
