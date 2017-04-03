<?php 
require_once('Empleado.php');

class Fabrica
{
	private $_empleados;
	private $_razonSocial;

	public function __construct($razonsocial)
	{
		$this->_razonSocial = $razonsocial;
		$this->_empleados = array();
	}

	public function AgregarEmpleados($persona)
	{
		array_push($this->_empleados,$persona);

		$this->EliminarEmpleadosRepetidos();
	}

	public function CalcularSueldos()
	{
		$sueldos = 0;
		foreach ($this->_empleados as $value) {
			
			$sueldos += $value->getSueldo();
		}

		return $sueldos;
	}

	public function EliminarEmpleado($persona)
	{
		foreach ($this->_empleados as $key => $value) {
			if($value == $persona)
				unset($this->_empleados[$key]);
		}
	}

	//La funcion array_unique funcion con objectos usando SORT_REGULAR.
	private function EliminarEmpleadosRepetidos()
	{
		$this->_empleados = array_unique($this->_empleados,SORT_REGULAR);
	}

	public function ToString()
	{
		echo "$this->_razonSocial"."<br/>";
		foreach ($this->_empleados as $value) {
			echo $value->ToString();
			echo "<br/>";
		}
	}
}

?>