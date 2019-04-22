
<html>
  <head>
    <meta charset="utf-8">
    <title> Modificar Cliente</title>
  </head>
  <body>

      <div>
        <h1>Modificar Cliente </h1>


        <form name="form" method="post" action ="../Controllers/ContUpdateCliente.php">
      </div>
      <div>
      <input type="text" class="textbox" id="txt_nombre" name="txt_nombre" value="<?php echo $nombre_cliente; ?>" required>
      <input type="text" class="textbox" id="txt_apellido" name="txt_apellido" value="<?php echo $apellido_cliente; ?>" required>
      <div>
      <input type="text" class="textbox" id="txt_correo" name="txt_correo" value="<?php echo $correo; ?>">
      </div>
      <div>
        <input type="text" class="textbox" id="txt_direccion" name="txt_direccion" value="<?php echo  $direccion; ?>">
      </div>
      <div>
      <input type="text" class="textbox" id="txt_telefono" name="txt_telefono" value= "<?php echo $telefono; ?>">
      </div>
      <div>
      <input type="hidden" name= "id_cliente" value=<?php echo $_GET['id_cliente']; ?> >
      <input type="submit" name="but_actualizar" value = "Actualizar" /></form>

      </div>
    </form>

    </body>
  </form>
  </body>
  </html>
