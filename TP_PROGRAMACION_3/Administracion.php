<?php 

require_once('Empleado.php');

if(isset($_POST["guardar"]))
{
    $emp = new Empleado($_POST["nombre"],$_POST["apellido"],$_POST["dni"],$_POST["sexo"],$_POST["legajo"],$_POST["sueldo"]);
    
    $arch = fopen("empleados.txt","a");

    if(fwrite($arch,$emp->ToString()."\r\n"))
    {
        echo "<a href="."/mostrar.php"."></a>";
    }

    fclose($arch);   
}

?>