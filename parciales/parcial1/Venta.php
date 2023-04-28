<?php
class Venta{
    private $numero;
    private $fecha;
    private $referencia_cliente;//cliente
    private $coleccion_bicicleta;//se refiere a que la venta va a tener una coleccion de bicicletas
    private $precio_final;
    
    //METODO CONSTRUCTOR
    public function __construct($numero,$fecha,$referencia_cliente,$coleccion_bicicleta,$precio_final){
        $this->numero=$numero;
        $this->fecha=$fecha;
        $this->referencia_cliente=$referencia_cliente;
        $this->coleccion_bicicleta=$coleccion_bicicleta;
        $this->precio_final=$precio_final;
    }

    //METODO DE ACCESO
    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($numero){
        $this->numero=$numero;
    }
    public function getFecha (){
        return $this->fecha;
    }
    public function setFecha($fecha){
        $this->fecha=$fecha;
    }
    public function getReferencia_cliente(){
        return $this->referencia_cliente;
    }
    public function setReferencia_cliente($referencia_cliente){
        $this->referencia_cliente=$referencia_cliente;
    }
    public function getReferencia_coleccion_bicleta(){
        return $this->coleccion_bicicleta;
    }
    public function setReferencia_coleccion_bicleta($coleccion_bicicleta){
        $this->coleccion_bicicleta=$coleccion_bicicleta;
    }
    public function getPrecio_final (){
        return $this->precio_final;
    }
    public function setPrecio_final($precio_final){
        $this->precio_final=$precio_final;
    }
    //METODO DE LECTURA
    public function __toString(){
        return "\nEl numero es: ".$this->numero.
        "\nLa fecha es: ".$this->fecha.
        "\n La referencia al cliente es: ".$this->referencia_cliente.
        "\"La referencia a la coleccion es: ".$this->coleccion_bicicleta.
        "\n El precio final es: ".$this->precio_final;

    }
    public function incorporar_bicicleta($obj_bici){
        if($obj_bici->getActiva==true){//objeto bicicleta llama a su metodo de acceso getActiva
        array_push($this->coleccion_bicicleta,$obj_bici);
        $this->precio_final=$this->precio_final+$obj_bici->dar_precio_venta;
        } 
    }


}