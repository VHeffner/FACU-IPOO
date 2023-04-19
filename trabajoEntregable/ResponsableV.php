<?php
class ResponsableV{
private $numero_empleado;
private $numero_licencia;
private $nombre;
private $apellido;

//METODO CONSTRUCTOR
public function __construct($numero_empleado,$numero_licencia,$nombre,$apellido){
    $this->numero_empleado=$numero_empleado;
    $this->numero_licencia=$numero_licencia;
    $this->nombre=$nombre;
    $this->apellido=$apellido;

}


//---METODOS DE ACCESO---
public function getNumero_empleado()
{
return $this->numero_empleado;
}


public function setNumero_empleado($numero_empleado)
{
$this->numero_empleado = $numero_empleado;

}


public function getNumero_licencia()
{
return $this->numero_licencia;
}


public function setNumero_licencia($numero_licencia)
{
$this->numero_licencia = $numero_licencia;

}


public function getNombre()
{
return $this->nombre;
}

 
public function setNombre($nombre)
{
$this->nombre = $nombre;

}


public function getApellido()
{
return $this->apellido;
}


public function setApellido($apellido)
{
$this->apellido = $apellido;

}
public function __toString(){ 
    return $this->numero_empleado.$this->numero_licencia.$this->nombre.$this->apellido;
}
}