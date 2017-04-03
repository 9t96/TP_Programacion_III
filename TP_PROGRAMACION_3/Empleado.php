<?php
require_once ('Persona.php');

class Empleado extends Persona
{
    protected $_legajo;
    protected $_sueldo;

    public function __construct($nombre,$apellido,$dni,$sexo,$legajo,$sueldo = "0")
    {
        parent::__construct($nombre,$apellido,$dni,$sexo);
        $this->_legajo = $legajo;
        $this->_sueldo = $sueldo;
    }

    public function getLegajo()
    {
        return $this->_legajo;
    }

    public function getSueldo()
    {
        return $this->_sueldo;
    }

    public function Hablar($idioma)
    {
        
        return "El empleado habla $idioma";
    }

    public function ToString()
    {
        $sb = parent::ToString();
        return $sb ."-"." Legajo: $this->_legajo"."-"." Sueldo: $ $this->_sueldo";
    }

}

?>

