<?php
class Bicicleta{
    private $codigo;
    private $costo;
    private $anio_fabricacion;
    private $descripcion;
    private $porcentaje;
    private $incremento_anual;
    private $activa;

    //METODO CONSTRUCTOR
    public function __construct ($codigo,$costo,$anio_fabricacion,$descripcion,$porcentaje,$incremento_anual,$activa){
        $this->codigo=$codigo;
        $this->costo=$costo;
        $this->anio_fabricacion=$anio_fabricacion;
        $this->descripcion=$descripcion;
        $this->porcentaje=$porcentaje;
        $this->incremento_anual=$incremento_anual;
        $this->activa=$activa;
        }
    //METODOS DE ACCESO
    public function getCodigo{
        return $this->codigo;
    }
    public function setCodigo($codigo){
        $this->codigo=$codigo
    }
    public function getCosto{
        return $this ->costo;       
    }
    public function setCodigo($costo){
        $this->costo=$costo;
    }
    public function getAnio_fabricacion{
        return $this->anio_fabricacion;
    }
    public function setAnio_fabricacion($anio_fabricacion)
        $this->anio_fabricacion=$anio_fabricacion;
    }
    public function getDescripcion{{
        return $this->descripcion;
    }
    public function setDescricion($descripcion){
        $this->descripcion=$descripcion;
    }
    public function getPorcentaje{
        return $this->porcentaje;
    }
    public function setPorcentaje($porcentaje){
        $this->porcentaje=$porcentaje;
    }
    public function getIncremento_anual{
        return $this->incremento_anual;
    }
    public function setIncremento_anual($incremento_anual){
        $this->incremento_anual=$incremento_anual;
    }
    public function getActiva{
        return $this->activa;
    }
    public function setActiva($activa){
        $this->activa;
    }

}