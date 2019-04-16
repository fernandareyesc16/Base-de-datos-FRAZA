
<html>
  <head>
    <meta charset="utf-8">
    <?php $id_garantia = $_GET['id_garantia']; ?>
    <title> Usar Garantía</title>
  </head>
  <body>

      <!--<form name='form' method='post'> -->

      <div>
        <h1>Usar Garantía <?php echo $id_garantia ?> : insertar datos</h1>
      </div>
      <div>
      <form action="../Controllers/ContInsertaFase.php?id_garantia=<?php echo $id_garantia ?>" method="post" name="form1">
          Fase:<input type="textbox" class="textbox" id="txt_fase" name="txt_fase" placeholder="Escriba una de las fases" />
          <h5>Inspección, Reparación, Orden de piezas, Espera de piezas, Completada</h5>
      </div>
      <div>
        <h3>Encargado:</h3>
          <input type="textbox" class="textbox" id="txt_nombre_encargado" name="txt_nombre_encargado" placeholder="Nombre" />
          <input type="textbox" class="textbox" id="txt_apellido_encargado" name="txt_apellido_encargado" placeholder="Apellido" />
      </div>
      </div>
      <div>
          <input type="date" name="txt_fechaini"/>
      </div>
      <div>
          Duración: <input type="textbox" name="duracion" placeholder="Inserte número">
      </div>
      <div>
        <h3>Comentarios:</h3>
          <input type="textbox" name="comment" >
      </div>
    <input type="submit" name="Guardar" value="Guardar">
    </form>


  </body>
  <html>
