<?php
$miobjeto=new stdClass();
$miobjeto->nombre=$_GET["nombre"];
$miobjeto->apellido=$_GET["apellido"];

$archivo = Fopen('usuarios.txt', 'a');
fwrite($archivo,json_encode($miobjeto)."\n");
fclose ($archivo);
?>





