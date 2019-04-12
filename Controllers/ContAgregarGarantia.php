<?php
require_once("../View/AgregarGarantia.php");
  if(isset($_POST['but_submit'])){
    require_once("../Model/Garantia1.php");
    if ($cliente = "" || $maquinaria = ""){
      echo "Error: no se insertó cliente o maquinaria";
    }else{
    $nuevo = new Garantia1();
    $asd = $nuevo->setGarantia($_POST['txt_cliente'], $_POST['txt_fecha_creacion'],$_POST['txt_monto_total'], $_POST['txt_maquinaria'],$_POST['txt_fase']);
    }
}
?>