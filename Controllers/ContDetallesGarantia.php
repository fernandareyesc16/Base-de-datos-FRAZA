<?php
require_once("../Models/cfg.php");
require_once("../Models/Crud.php");
$crud = new Crud($username, $contrasena);
$noSerie = $_GET['id_maquinaria'];
$id_garantia = $_GET['id_garantia'];


$row = $crud->getData("SELECT numero_de_serie, modelo, marca from maquinaria where id_maquinaria= $noSerie");

if(is_array($row)){
  foreach ($row as $res){
    $numSerie= $res['numero_de_serie'];
    $modelo = $res['modelo'];
    $marca = $res['marca'];
  }
}

$rows = $crud->getData("SELECT nombre_fase,empleado_encargado,fecha_inicio,duracion,comentario from fase_garantia,fase where fase_garantia.id_fase = fase.id_fase and fase_garantia.id_garantia = $id_garantia");

require_once("../Views/DetallesGarantia.php");



?>
