<?php
class Cliente
{
    private $nombre;
    private $apellido;
    private $alta;
    private $tipo_documento;
    private $numero_documento;


    //METODO CONSTRUCTOR
    public function __construct($nombre, $apellido, $alta, $tipo_documento, $numero_documento)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->alta = $alta;
        $this->tipo_documento = $tipo_documento;
        $this->numero_documento = $numero_documento;
    }

    //METODOS DE ACCESO 

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
    public function getAlta()
    {
        return $this->alta;
    }
    public function setAlta($alta){
        $this->alta=$alta;
    }
    public function getTipo_documento(){
        return $this->tipo_documento;
    }
    public function setTipo_documento($tipo_documento){
        $this->tipo_documento=$tipo_documento;

    }

    public function getNumero_documento()
    {
        return $this->numero_documento;
    }

     public function setNumero_documento($numero_documento)
    {
        $this->numero_documento = $numero_documento;
    }
    
    public function _toString(){
        return "\nEl nombre es: ".$this->nombre.
        "\nEl apellido es: ".$this->apellido.
        "\nEl alta es:".$this->alta.
        "\n El tipo de documento es:".$this->tipo_documento.
        "\nEl numero de documento es: ".$this->numero_documento;
    }

}
