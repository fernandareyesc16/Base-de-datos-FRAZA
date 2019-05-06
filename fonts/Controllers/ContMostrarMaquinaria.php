<?php
require_once("../Models/Maquinaria.php");
$maquinaria = new Maquinaria();
$row = $maquinaria->getMaquinaria();
require_once("../views/MostrarMaquinaria.php");


   echo '<div style="overflow-x:auto;">';
   echo "<table border ='1' cellspacing='2' cellpadding='10'>
   <tr>
   <th>Modelo</th>
   <th>Número de Serie</th>
   <th>Marca</th>
   <th>Fecha de Compra</th>
   </tr>";
   for ($i = 0; $i < count($row); $i++) {
       echo '<tr style="width:20%">';
       echo '<td style="width:20%px">' . $row[$i]['modelo'] . "</td>";
       echo '<td style="width:20%">' . $row[$i]['numero_de_serie'] . "</td>";
       echo '<td style="width:20%">' . $row[$i]['marca'] . "</td>";
       echo '<td style="width:20%">' . $row[$i]['fecha_de_compra'] . "</td>";
       echo "</tr>";
   }
   echo "</table>";
   echo "</div>";


?>
