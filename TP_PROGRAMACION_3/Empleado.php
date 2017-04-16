<?php
require_once ('Persona.php');

class Empleado extends Persona
{
    protected $_legajo;
    protected $_sueldo;
    protected $_path;

    public function __construct($nombre,$apellido,$dni,$sexo,$legajo,$sueldo = "0",$path)
    {
        parent::__construct($nombre,$apellido,$dni,$sexo);
        $this->_legajo = $legajo;
        $this->_sueldo = $sueldo;
        $this->_path = $path;
    }

    public function getLegajo()
    {
        return $this->_legajo;
    }

    public function getSueldo()
    {
        return $this->_sueldo;
    }

    public function getPathFoto()
    {
        return $this->_path;
    }

    public function setPathFoto($value)
    {
        $this->_path = $value;
    }


    public function Hablar($idioma)
    {
        
        return "El empleado habla $idioma";
    }

    public function ToString()
    {
        $sb = parent::ToString();
        return $sb."-".$this->_legajo."-".$this->_sueldo."-".$this->_path;
    }

}

?>

