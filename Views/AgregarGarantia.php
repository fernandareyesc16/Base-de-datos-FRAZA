<html>
  <head>
    <meta charset="utf-8">
    <title> Agregar Garantia</title>
  </head>
  <body>
      <form action="../Controllers/ContAgregarGarantia.php" name='form' method='post'>

      <div>
        <h1>Agregar Garantía</h1>
        <div>
       <h2>Datos de Maquinaria: </h2>
     </div>
     <div>
         <input type="text" class="textbox" id="txt_modelo" name="txt_modelo" placeholder="Modelo" />

     </div>
     <div>
         <input type="text" class="textbox" id="txt_numero_de_serie" name="txt_numero_de_serie" placeholder="Numero de Serie" />
     </div>
     <div>
         <input type="text" class="textbox" id="txt_marca" name="txt_marca" placeholder="Marca" />
     </div>


      </div>
    <h2>Datos adicionales: </h2>
      <div>
          <input type="text" class="textbox" id="txt_cliente" name="txt_cliente" placeholder="Cliente" />
          <input type="text" class="textbox" id="txt_apellido" name="txt_apellido" placeholder="Apellidos" />

      </div>

      <div>

          Fecha de terminación: <input type="date" class="textbox" id="txt_fecha_terminacion" name="txt_fecha_terminacion" placeholder="fecha de terminación" />
      </div>

      <div>
          <input type="submit" name="but_submit" value = "Agregar" />
      </div>
    </form>


  </body>
  <html>
