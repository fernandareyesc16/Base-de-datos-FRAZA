<?php
<html>
  <head>
    <meta charset="utf-8">
    <title> Detalles del Cliente</title>
  </head>
  <body>
<form name='form' method='post'>

      <div>
        <h1>Modificar Cliente </h1>
      </div>
      <div>
          <input type="text" class="textbox" id="txt_nombre" name="txt_nombre" placeholder=<?php echo $nombre; ?>"><br/>" />
          <input type="text" class="textbox" id="txt_apellido" name="txt_apellido" placeholder=<?php echo $apellidos; ?>"><br/>"/>
      </div>
      <div>
          <input type="text" class="textbox" id="txt_correo" name="txt_correo" placeholder=<?php echo $correo; ?>"><br/>" />
      </div>
      <div>
          <input type="text" class="textbox" id="txt_direccion" name="txt_direccion" placeholder=<?php echo $direccion; ?>"><br/>" />
      </div>
      <div>
          <input type="text" class="textbox" id="txt_telefono" name="txt_telefono" placeholder=<?php echo $telefono; ?>"><br/>" />
      </div>
      <div>
          <input type="modificar" name="but_modificar" value = "Modificar" />
      </div>
    </form>
    </body>
  </form>
  </body>
  </html>
?>
