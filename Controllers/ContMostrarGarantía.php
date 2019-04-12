<?php
require_once("../Models/Garantia1.php");
$garantias = new Garantia();
$row = $garantias->getGarantias();
require_once("../views/MostrarGarantia.php");

   echo '<div style="overflow-x:auto;">';
   echo "<table border ='1' cellspacing='2' cellpadding='10'>
   <tr>
   <th>Cliente</th>
   <th>Fecha Creacion</th>
   <th>Monto total</th>
   <th>Maquinaria</th>
   <th>Fase</th>
   </tr>";
   for ($i = 0; $i < count($row); $i++) {
       echo '<tr style="width:20%">';
       echo '<td style="width:20%px">' . $row[$i]['cliente'] . "</td>";
       echo '<td style="width:20%">' . $row[$i]['fecha_creacion'] . "</td>";
       echo '<td style="width:20%">' . $row[$i]['monto_total'] . "</td>";
       echo '<td style="width:20%">' . $row[$i]['maquinaria'] . "</td>";
       echo '<td style="width:20%">' . $row[$i]['fase'] . "</td>";
       echo "</tr>";
   }
   echo "</table>";
   echo "</div>";
?>
