<?php
require_once("../Models/Crud.php");
require_once("../Views/AgregarGarantia.php");
$crud = new Crud();

  if(isset($_POST['but_submit'])){
    $id_cliente;
    $id_maquinaria;
    $id_garantia;
    $numserie = $_POST['txt_numero_de_serie'];
    $modelo= $_POST['txt_modelo'];
    $marca = $_POST['txt_marca'];
    $nombreCliente = $_POST['txt_cliente'];
    $apellido = $_POST['txt_apellido'];
    $fechater =$_POST['txt_fecha_terminacion'];

    $result = $crud->getData("SELECT id_cliente from cliente where nombre_cliente= '$nombreCliente' and apellido_cliente='$apellido'");
    if(is_array($result)){
      foreach ($result as $res){
        $id_cliente = $res['id_cliente'];
      }
    }
    $resultM = $crud->execute("INSERT INTO maquinaria (modelo, numero_de_serie, marca) VALUES('$modelo', '$numserie', '$marca')");

    $result1 = $crud->getData("SELECT id_maquinaria from maquinaria where numero_de_serie= '$numserie'");
    if(is_array($result1)){
      foreach ($result1 as $res){
        $id_maquinaria = $res['id_maquinaria'];
      }
    }

    $resultG = $crud->execute("INSERT INTO garantia (cliente,fecha_creacion, fecha_terminacion, maquinaria) VALUES('$id_cliente',CURDATE(), '$fechater', '$id_maquinaria')");
    $idGarantia = $crud->getData("SELECT id from garantia where maquinaria= $id_maquinaria");
    if(is_array($idGarantia)){
      foreach ($idGarantia as $res){
        $id_garantia = $res['id'];
      }
    }
    $f_g_insterta = $crud->execute("INSERT into fase_garantia(id_garantia, id_fase) VALUES($id_garantia,1)");
    echo "Garantía agregada exitosamente";
    echo "<form action='../Controllers/ContMostrarGarantía.php'><input type='submit' name='but_regresar' value = 'Regresar' /></form>";
}



?>
