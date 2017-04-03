<?php
require_once('Empleado.php');
require_once('Fabrica.php');
//Creo una persona.
$per1 = new Empleado("Juan","Perez","39557782","M","12245","9850");

//Pido todos los datos a traves de los getter.
echo $per1->getNombre()."<br/>";
echo $per1->getApellido()."<br/>";
echo $per1->getDni()."<br/>";
echo $per1->getSexo()."<br/>";
echo $per1->getLegajo()."<br/>";
echo $per1->getSueldo()."<br/>";
/*-----------------------------------------------------------------------------*/

echo $per1->ToString();

/*-----------------------------------------------------------------------------*/


//Creo Empleados...
$miFabrica = new Fabrica("Los pollos hermanos");
$emp1 = new Empleado("Juan","Riquelme","3912496","M","12243","9850");
$emp2 = new Empleado("Martin","Nuñez","40817782","F","24326","7500");
$emp3 = new Empleado("Horacio","Quiquela","29956672","M","40506","6400");
$emp4 = new Empleado("Ruben","Ramirez","60511782","M","24545","15000");
$emp5 = new Empleado("Mauricio","Perez","27321782","F","1354","30000");
$emp6 = new Empleado("Juan","Miranda","39535782","M","1045","7850");

//Agrego empleados. Algunos repetidos
$miFabrica->AgregarEmpleados($emp1);
$miFabrica->AgregarEmpleados($emp2);
$miFabrica->AgregarEmpleados($emp2);
$miFabrica->AgregarEmpleados($emp3);
$miFabrica->AgregarEmpleados($emp4);
$miFabrica->AgregarEmpleados($emp5);
$miFabrica->AgregarEmpleados($emp6);
$miFabrica->AgregarEmpleados($emp4);

//Muestro los empleados
echo "<hr/><br/>Empleados: <br/>";
$miFabrica->ToString();
echo "<hr/>";

echo "Elimino al empleado 1 y 2";
$miFabrica->EliminarEmpleado($emp1);
$miFabrica->EliminarEmpleado($emp2);
echo "<hr/>";

echo "Vuelvo a imprimir: <br/>";
$miFabrica->ToString();
echo "<hr/>";
echo "Los empleados cobran " .$miFabrica->CalcularSueldos()."<br/>";
echo "<hr/>";




?>