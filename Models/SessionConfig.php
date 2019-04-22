<?php

$myfile = fopen("../Models/cfg.php","w");

$txt = "<?php\r\n";
fwrite($myfile, $txt);
$txt = "\$username= '".$_POST['usuario']."';\r\n";
fwrite($myfile, $txt);

$txt = "\$contrasena= '".$_POST['contrasena']."';\r\n";
fwrite($myfile, $txt);

$txt = "?>";
fwrite($myfile, $txt);

fclose($myfile);


require_once("../Models/cfg.php");
//require_once("../Controllers/ContMostrarClientes.php");
//require_once("../Controllers/ContModificarCliente.php")
require_once("../Controllers/homepage.php");
require_once("Crud.php");

$new = new Crud($username,$contrasena);

?>
