<?php
class Producto {
    private $codigoBarra;
    private $marca;
    private $color;
    private $talle;
    private $descripcion;
    private $cantStock;

    public function __construct($codigoBarra, $marca, $color, $talle, $descripcion, $cantStock){

        $this->codigoBarra = $codigoBarra;
        
        $this->marca = $marca;
        
        $this->color = $color;
        
        $this->talle = $talle;
        
        $this->descripcion = $descripcion;
        
        $this->cantStock = $cantStock;
        
    }
    

    /**
     * Get the value of cantStock
     */ 
    public function getCantStock()
    {
        return $this->cantStock;
    }

    /**
     * Set the value of cantStock
     *
     * @return  self
     */ 
    public function setCantStock($cantStock)
    {
        $this->cantStock = $cantStock;

        return $this;
    }

    public function __toString(){ 

        return "Código de Barras: ". $this->codigoBarra. "\n
        
        Marca: ". $this->marca ."\n
        
        Color: ".$this->color."\n
        
        Talle: ". $this->talle."\n
        
        Descripción: ".$this->descripcion."\n
        
        Cantidad en Stock: ".$this->cantStock.";
        
    }
    
    public function actualizarStock($cantStock){

        if($cantStock > 0){
        
        $this->cantStock = $this->cantStock + $cantStock;
        
        }else if ($cantStock < 0){
        
        $this->cantStock = $this->cantStock - $cantStock;
        
        }
        
    }
}