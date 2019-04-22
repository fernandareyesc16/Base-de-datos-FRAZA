
<?php
require_once("../Models/cfg.php");
require_once("../Models/Crud.php");
$id_garantia = $_GET['id_garantia'];
include_once ("../Models/Crud.php");

$crud = new Crud($username, $contrasena);

if (isset($_POST['Guardar'])) {

  //$id_garantia = $_POST['id_garantia'];
  $nombre_fase  = $_POST['txt_fase'];
  $nombre_encargado = $_POST['txt_nombre_encargado'];
  $apellido_encargado = $_POST['txt_apellido_encargado'];
  $fecha_inicio = $_POST['txt_fechaini'];
  $duracion = $_POST['duracion'];
  $comentario = $_POST['comment'];

  $row1 = $crud->getData ("SELECT id_fase from fase where nombre_fase = '$nombre_fase'");
  if(is_array($row1)){
    foreach ($row1 as $res){
    $id_fase= $res['id_fase'];
  }
  }

  $result = $crud->getData("SELECT id from empleado where nombre= '$nombre_encargado' and apellido='$apellido_encargado'");
  if(is_array($result)){
    foreach ($result as $res){
      $id_empleado = $res['id'];
    }
  }

  $result = $crud->execute ("INSERT INTO fase_garantia values ($id_garantia,$id_fase,$id_empleado,'$fecha_inicio',$duracion,'$comentario')");

echo "Datos agregados exitosamente.";
echo "<form action='../Controllers/ContMostrarGarantía.php'><input type='submit' nombre='regresar' value='Regresar'></form>";
}

 ?>
