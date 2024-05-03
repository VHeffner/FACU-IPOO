<?php
class Item {
    private $objProducto;
    private $cantidadVendida;

    public function __construct($objProducto, $cantidadVendida) {
        $this->objProducto = $objProducto;
        $this->cantidadVendida = $cantidadVendida;
    }

    /**
     * Get the value of objProducto
     */ 
    public function getProducto()
    {
        return $this->objProducto;
    }

    /**
     * Set the value of objProducto
     *
     * @return  self
     */ 
    public function setProducto($objProducto)
    {
        $this->objProducto = $objProducto;

        return $this;
    }

    /**
     * Get the value of cantidadVendida
     */ 
    public function getCantidadVendida()
    {
        return $this->cantidadVendida;
    }

    /**
     * Set the value of cantidadVendida
     *
     * @return  self
     */ 
    public function setCantidadVendida($cantidadVendida)
    {
        $this->cantidadVendida = $cantidadVendida;

        return $this;
    }
}
