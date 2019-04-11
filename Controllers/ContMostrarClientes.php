<?php
require_once("../Models/Clientes.php");
$clientes = new Clientes();
$row = $clientes->getClientes();
require_once("../views/MostrarCliente.php");


   echo '<div style="overflow-x:auto;">';
   echo "<table border ='1' cellspacing='2' cellpadding='10'>
   <tr>
   <th>Nombre</th>
   <th>Apellidos</th>
   <th>Teléfono</th>
   </tr>";
   for ($i = 0; $i < count($row); $i++) {
       echo '<tr style="width:20%">';
       echo '<td style="width:20%">' . $row[$i]['nombre_cliente'] . "</td>";
       echo '<td style="width:20%">' . $row[$i]['apellido_cliente'] . "</td>";
       echo '<td style="width:20%">' . $row[$i]['telefono'] . "</td>";
       echo '<td style="width:20%"><input type="submit" value="Ver Detalles"></td>';
       echo "</tr>";
   }
   echo "</table>";
   echo "</div>";

?>
