<?php
require_once("../Models/cfg.php");
require_once("../Models/Crud.php");
require_once("../Views/AgregarGarantia.php");
$crud = new Crud($username, $contrasena);

  if(isset($_POST['but_submit'])){
    $id_cliente;
    $id_maquinaria;
    $id_garantia;
    $numserie = $_POST['txt_numero_de_serie'];
    $modelo= $_POST['txt_modelo'];
    $marca = $_POST['txt_marca'];
    $idCliente = $_POST['Cliente'];
    $fechater =$_POST['txt_fecha_terminacion'];

    //Busca al cliente en la base de datos
    /*$result = $crud->getData("SELECT id_cliente from cliente where nombre_cliente= '$nombreCliente' and apellido_cliente='$apellido'");
      //print_r($result);
      if(!empty($result)){
        //extrae el id del cliente
        foreach ($result as $res){
          $id_cliente = $res['id_cliente'];
        }*/

        //inserta la maquinaria
        $resultM = $crud->execute("INSERT INTO maquinaria (modelo, numero_de_serie, marca) VALUES('$modelo', '$numserie', '$marca')");
        //busca la maquinaria que obviamente va a existir porque nosotros mismos la creamos
        $result1 = $crud->getData("SELECT id_maquinaria from maquinaria where numero_de_serie= '$numserie'");
        //extrae id de la maquinaria
        if(is_array($result1)){
          foreach ($result1 as $res){
            $id_maquinaria = $res['id_maquinaria'];
          }
        }

          //inserta datos en la garantía
            $resultG = $crud->execute("INSERT INTO garantia (cliente,fecha_creacion, fecha_terminacion, maquinaria,valida) VALUES('$idCliente',CURDATE(), '$fechater', '$id_maquinaria',1)");
            $idGarantia = $crud->getData("SELECT id from garantia where maquinaria= $id_maquinaria");

            //extrae id de la garantía recién creada para asignarla posteriormete a fase_garantia
            if(is_array($idGarantia)){
              foreach ($idGarantia as $res){
                $id_garantia = $res['id'];
              }
            }

            //inserta datos en fase_garantia con la fase 1 ("No se ha requerido") como predeterminada
            $f_g_insterta = $crud->execute("INSERT into fase_garantia(id_garantia, id_fase) VALUES($id_garantia, 1)");
            echo "Garantía agregada exitosamente";
            echo "<form action='../Controllers/ContMostrarGarantía.php'><input type='submit' name='but_regresar' value = 'Regresar' /></form>";
      }else{
        echo "no se encontró el cliente";
      }










?>
