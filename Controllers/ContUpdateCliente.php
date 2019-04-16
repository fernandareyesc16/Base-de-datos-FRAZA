<?php
require_once("../Models/Clientes.php");
$cliente = new Clientes();

if(isset($_POST['but_actualizar'])){
  $id_cliente = $_POST['id_cliente'];
  if ($nombre = "" || $apellido = ""){
    echo "Error: no se insertó nombre o apellido";
  }else{
    $asd = $cliente->modificarCliente($_POST['id_cliente'], $_POST['txt_nombre'], $_POST['txt_apellido'],$_POST['txt_correo'], $_POST['txt_direccion'], $_POST['txt_telefono']);
    echo "Cliente modificado exitosamente";
    echo "<form action='../Controllers/ContMostrarClientes.php'><input type='submit' name='but_regresar' value = 'Regresar' /></form>";

  }

}
?>
