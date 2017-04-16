<?php

abstract class Persona
{
    private $_apellido;
    private $_dni;
    private $_nombre;
    private $_sexo;

    public function __construct($nombre,$apellido,$dni,$sexo)
    {
        $this->_apellido = $apellido;
        $this->_dni = $dni;
        $this->_nombre = $nombre;
        $this->_sexo = $sexo;
    }

    public function getApellido()
    {
        return $this->_apellido;
    }

    public function getDni()
    {
        return $this->_dni;
    }

    public function getNombre()
    {
        return $this->_nombre;
    }

    public function getSexo()
    {
        return $this->_sexo;
    }

    public function Hablar($idioma){}
 
    public function ToString()
    {
        return $this->_nombre."-".$this->_apellido."-".$this->_dni."-".$this->_sexo;
    }

}



?>