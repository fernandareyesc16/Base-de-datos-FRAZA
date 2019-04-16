<?php

require_once("../views/AgregarCliente.php");
  if(isset($_POST['but_submit'])){
    require_once("../Models/Clientes.php");
    if ($nombre = "" || $apellido = ""){
      echo "Error: no se insertó nombre o apellido";
    }else{
    $nuevo = new Clientes();
      $asd = $nuevo->setCliente($_POST['txt_nombre'], $_POST['txt_apellido'],$_POST['txt_correo'], $_POST['txt_direccion'], $_POST['txt_telefono']);
      echo "Cliente agregado exitosamente";
      echo "<form action='../Controllers/ContMostrarClientes.php'><input type='submit' name='but_regresar' value = 'Regresar' /></form>";

    }

}

?>
