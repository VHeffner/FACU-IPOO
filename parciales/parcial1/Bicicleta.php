<?php
class Bicicleta{
    private $codigo;
    private $costo;
    private $anio_fabricacion;
    private $descripcion;
    private $incremento_anual;
    private $activa;

    //METODO CONSTRUCTOR
    public function __construct ($codigo,$costo,$anio_fabricacion,$descripcion,$incremento_anual,$activa){
        $this->codigo=$codigo;
        $this->costo=$costo;
        $this->anio_fabricacion=$anio_fabricacion;
        $this->descripcion=$descripcion;
        $this->incremento_anual=$incremento_anual;
        $this->activa=$activa;
        }
    //METODOS DE ACCESO
    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }
    public function getCosto(){
        return $this ->costo;       
    }
    public function setCosto($costo){
        $this->costo=$costo;
    }
    public function getAnio_fabricacion(){
        return $this->anio_fabricacion;
    }
    public function setAnio_fabricacion($anio_fabricacion){
        $this->anio_fabricacion=$anio_fabricacion;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescricion($descripcion){
        $this->descripcion=$descripcion;
    }
    public function getIncremento_anual(){
        return $this->incremento_anual;
    }
    public function setIncremento_anual($incremento_anual){
        $this->incremento_anual=$incremento_anual;
    }
    public function getActiva(){
        return $this->activa;
    }
    public function setActiva($activa){
        $this->activa=$activa;
    }

    //metodo de lectura
    public function __toString(){
        return "\nCodigo: ".$this->codigo.
        "\nCosto: ".$this->costo.
        "\nAño de fabricacion: ".$this->anio_fabricacion.
        "\n Descripcion ".$this->descripcion.
        "\nIncremento anual: ".$this->incremento_anual.
        "\nSu alta es: ".$this->activa;
    }
    public function dar_precio_venta(){
        $venta=-1;
        if ($this->activa==true){
            $venta=$this->costo+$this->costo*($this->anio_fabricacion*$this->incremento_anual);
        }
        return $venta;
    }

}