<?php
require_once("../Models/cfg.php");
require_once("../Models/Crud.php");
header("Location:../Views/MostrarGarantia.php");
$crud = new Crud($username,$contrasena);

  $rows = $crud->getData("SELECT * from garantia");
   echo '<div style="overflow-x:auto;">';
   echo "<table border ='1' cellspacing='2' cellpadding='10'>
   <tr>
   <th>Cliente</th>
   <th>Fecha Creación</th>
   <th>Fecha Terminación</th>
   <th>Número de serie de Maquinaria</th>
   <th>Reparaciones</th>
   <th>Fases</th>
   </tr>";
   for ($i = 0; $i < count($rows); $i++) {
       echo '<tr style="width:20%">';
       //Busca el nombre y apellido del cliente con el id del cliente de la garantía[i]
       $clienteid = intval($rows[$i]['cliente']);
       $sql1 = "SELECT nombre_cliente, apellido_cliente from cliente where id_cliente = $clienteid ";
       $nombreCliente =$crud->getData($sql1);
       if(is_array($nombreCliente)){
         foreach ($nombreCliente as $res){
           $nomClient = $res['nombre_cliente'];
           $apeClient = $res['apellido_cliente'];
         }
       }

       echo '<td style="width:20%">' . $nomClient . " " . $apeClient . "</td>";
       echo '<td style="width:20%">' . $rows[$i]['fecha_creacion'] . "</td>";

       $id_garantia = intval($rows[$i]['id']);
       //Busca el número de serie con el id de la maquinaria de la garantia[i]
       $maqid = intval($rows[$i]['maquinaria']);
       $sql = "SELECT numero_de_serie from maquinaria where id_maquinaria = $maqid ";
       $nombreMaq =$crud->getData($sql);
       if(is_array($nombreMaq)){
         foreach ($nombreMaq as $res){
           $numSerie = $res['numero_de_serie'];
         }
       }

       echo '<td style="width:20%">' . $rows[$i]['fecha_terminacion'] . "</td>";
       echo '<td style="width:20%">' . $numSerie . "</td>";
       echo '<td style="width:20%">' . $rows[$i]['num_reparaciones'] . "</td>";

       //
       echo '<td style="width:20%"><select name="Estatus">
         <option value="1">No se ha requerido</option>
         <option value="2>Inspección</option>
         <option value="3">Reparación</option>
         <option value="4">Orden de piezas</option>
         <option value="5">Espera de Piezas</option>
         <option value="6">Completada</option>
       </select></td>';
       echo '<td style="width:20%"><a href="../Controllers/ContDetallesGarantia.php?id_maquinaria= ' . $maqid . '&id_garantia= ' . $id_garantia . '">Ver detalles</a>';
       echo "</tr>";
   }
   echo "</table>";
   echo "</div>";
?>
