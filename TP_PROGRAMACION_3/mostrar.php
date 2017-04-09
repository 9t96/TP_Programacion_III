<?php

require_once('/Empleado.php');

echo "cara de verga";

$arch = fopen("/empleados.txt","r");

while (!feof($arch)) {
    $datos = fgets($arch);

    echo $datos;
/*
    $separado = explode("-",$datos);
    */
}

fclose($arch);

?>