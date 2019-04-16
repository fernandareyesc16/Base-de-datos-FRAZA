<html>
  <head>
    <meta charset="utf-8">
    <title> Detalles garantía</title>
  </head>
  <body>
      <form name="form" method="post" action ="../Controllers/ContDetallesGarantia.php"></form>
      <h1>Garantía <?php echo $modelo, " ",  $marca, " ", $numSerie; ?></h1>

    <div>
    <form action="../Controllers/ContMostrarGarantía.php" method="post"><input type="submit" name="Regresar" value="Regresar"></form>
    </div>
    <div>
  
    </div>

    <?php
        foreach ($rows as $key => $res) {

        echo "<table border ='1' cellspacing='2' cellpadding='10'>
        <tr>
        <th>Fase</th>
        <th>Encargado</th>
        <th>Fecha de inicio</th>
        <th>Duración</th>
        <th>Comentario</th>
        </tr>";


          echo '<td style="width:20%">' . $res['nombre_fase'] . "</td>";
          //echo '<td style="width:20%">'. $rows[$i]['id_garantia'] .'</td>';
          echo '<td style="width:20%">'. $res['empleado_encargado'] .'</td>';
          echo '<td style="width:20%">'. $res['fecha_inicio'] .'</td>';
          echo '<td style="width:20%">'. $res['duracion'] .'</td>';
          echo '<td style="width:20%">'. $res['comentario'] .'</td>';
          echo '<td style="width:20%"><form name="form" method="post" action ="../Views/UsarGarantia.php?id_garantia=' . $id_garantia . '"> <input type="submit" name="Agregar" value="Agregar"></form></td>';
          echo "</tr>";

        }
          ?>

    </body>
  </form>
  </body>
  </html>
