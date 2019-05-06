<?php
require_once("../Models/Crud.php");
$crud = new Crud();


$myfile = fopen("../Models/cfg.php","w");

$usuario = $_POST['usuario'];
$password = $_POST['contrasena'];


$txt = "<?php\r\n";
fwrite($myfile, $txt);
$txt = "\$username= '$usuario';\r\n";
fwrite($myfile, $txt);

$txt = "\$contrasena= '$password';\r\n";
fwrite($myfile, $txt);

$sql = $crud->getData("SELECT rol from empleado where username = '$usuario' and contrasena = '$password'");
$esValido = $crud->getData("SELECT valido from empleado where username = '$usuario' and contrasena = '$password'");
if(is_array($esValido)){
  foreach ($esValido as $res){
    $valido = $res['valido'];
  }
}

if(!empty($sql) && $valido==1 ){
  if(is_array($sql)){
    foreach ($sql as $res){
      $rol = $res['rol'];
    }
    header("Location:../Controllers/ContLogin.php");
  }

}elseif(!empty($sql) && $valido!=1){
  header("Location: ../Views/EmpleadoInvalido.php");
}else{
  header("Location: ../Views/ErrorLogin.php");
}

$txt = "\$rol= '$rol';\r\n";
fwrite($myfile, $txt);


$txt = "?>";
fwrite($myfile, $txt);

fclose($myfile);


require_once("../Models/cfg.php");

//require_once("../Controllers/ContMostrarClientes.php");
//require_once("../Controllers/ContModificarCliente.php")

//$new = new Crud($username,$contrasena);

?>
