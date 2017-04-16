<?php

require_once('Empleado.php');

$arch = fopen("empleados.txt","r");

$objetosEmp = array();

while (!feof($arch)) {
    
    $linea = fgets($arch);

    $exploded = explode("-",$linea);

    if($exploded[0]!="")
    {
    	$objetosEmp[] = new Empleado($exploded[0],$exploded[1],$exploded[2],$exploded[3],$exploded[4],$exploded[5],$exploded[6]);
    }

}

fclose($arch);

echo "<table class='table' width='100%' align='center' border='1'>
	<thead>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>DNI</th>
		<th>Sexo</th>
		<th>Legajo</th>
		<th>Sueldo</th>
		<th>Foto</th>
	</thead>";

foreach ($objetosEmp as $value) {
	echo "<tr>
	<td>".$value->getNombre()."</td>
	<td>".$value->getApellido()."</td>
	<td>".$value->getDni()."</td>
	<td>".$value->getSexo()."</td>
	<td>".$value->getLegajo()."</td>
	<td>".$value->getSueldo()."</td>
	<td>"."<img src='fotos/".$value->getPathFoto()."'height='100". "'width='"."100'>"."</td>
	</tr>";
}

echo "</table>";

?>