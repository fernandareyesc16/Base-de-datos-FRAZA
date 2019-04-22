<?php
require_once("../Models/cfg.php");
require_once("../Views/AgregarCliente.php");
  if(isset($_POST['but_submit'])){


    $nombre = $_POST['txt_nombre'];
    $apellido= $_POST['txt_apellido'];
    $correo = $_POST['txt_correo'];
    $direccion= $_POST['txt_direccion'];
    $telefono = $_POST['txt_telefono'];

      require_once("../Models/Crud.php");
      $nuevo = new Crud($username,$contrasena);
      $asd = $nuevo->execute("INSERT INTO cliente (nombre_cliente, apellido_cliente, correo, direccion, telefono) VALUES('$nombre', '$apellido', '$correo', '$direccion', '$telefono')");
      echo "Cliente agregado exitosamente";
      echo "<form action='../Controllers/ContMostrarClientes.php'><input type='submit' name='but_regresar' value = 'Regresar' /></form>";

}

?>
