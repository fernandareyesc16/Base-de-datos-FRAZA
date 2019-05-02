<?php
require_once("../Models/cfg.php");
require_once("../Models/Crud.php");
$cliente = new Crud();

if(isset($_POST['but_actualizar'])){
  $usuario =$_POST['txt_usuario'];
  $nombre= $_POST['txt_nombre'];
  $apellido = $_POST['txt_apellido'];
  $id =  $_POST['id'];
  $rol =  $_POST['txt_rol'];
  $estado = $_POST['Estado'];
  if ($nombre == "" || $apellido == ""){
    echo "Error: no se insertó nombre o apellido";
  }else{
    $asd = $cliente->execute("UPDATE empleado SET username = '$usuario', nombre='$nombre', apellido='$apellido', rol='$rol', valido='$estado' WHERE id=$id");

    echo "Empleado modificado exitosamente";
    echo "<form action='../Controllers/ContMostrarUsuarios.php'><input type='submit' name='but_regresar' value = 'Regresar' /></form>";

  }

}
?>
