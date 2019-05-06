<?php

require_once("../views/AgregarMaquinaria.php");
  if(isset($_POST['but_submit'])){
    require_once("../Models/Maquinaria.php");
    if ($marca = "" || $modelo = ""){
      echo "Error: no se insertó marca o modelo";
    }else{
    $nuevo = new Maquinaria();
    $asd = $nuevo->setMaquinaria($_POST['txt_modelo'], $_POST['txt_numero_de_serie'],$_POST['txt_marca'], $_POST['date_fecha_de_compra']);
    }

}

?>
