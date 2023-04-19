<?php
class pasajero
{
//DECLARACION DE ATRIBUTOS
private $nombre;
private $apellido;
private $dni;
private $telefono;

//METODO CONSTRUCTOR
public function __construct($nombre,$apellido,$dni,$telefono){
    $this->nombre=$nombre;
    $this->apellido=$apellido;
    $this->dni=$dni;
}
//METODOS DE ACCESO



/**
 * Get the value of nombre
 */ 
public function getNombre()
{
return $this->nombre;
}

/**
 * Get the value of apellido
 */ 
public function getApellido()
{
return $this->apellido;
}

/**
 * Get the value of dni
 */ 
public function getDni()
{
return $this->dni;
}

/**
 * Get the value of telefono
 */ 
public function getTelefono()
{
return $this->telefono;
}

/**
 * Set the value of nombre
 *
 * @return  self
 */ 
public function setNombre($nombre)
{
$this->nombre = $nombre;

return $this;
}

/**
 * Set the value of apellido
 *
 * @return  self
 */ 
public function setApellido($apellido)
{
$this->apellido = $apellido;

return $this;
}

/**
 * Set the value of dni
 *
 * @return  self
 */ 
public function setDni($dni)
{
$this->dni = $dni;

return $this;
}

/**
 * Set the value of telefono
 *
 * @return  self
 */ 
public function setTelefono($telefono)
{
$this->telefono = $telefono;

return $this;
}
public function __toString(){ 
    return "Nombre: ".$this->nombre.
            "\nApellido: ".$this->apellido.
            "\nDNI: ".$this->dni.
            "\nTelefono: ".$this->telefono;
}
}
