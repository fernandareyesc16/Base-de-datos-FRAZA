<?php
require_once("../Models/cfg.php")
 ?>
<html>
<head>
  <meta charset="utf-8">
</head>

<body>
        <h3>Usuario: <?php echo $username ?></h3>
        <form action="../Controllers/ContMostrarClientes.php"><input type="submit" value="Clientes"></form>
        <form action="../Controllers/ContMostrarGarantía.php"><input type="submit" value="Garantías"></form>
        <form action="../Controllers/ContAgregarUsuario.php"><input type="submit" value="Agregar Empleado"></form>
        <form action="../Views/Login.php"><input type="submit" value="Cerrar sesión"></form>

</body>



</html>
