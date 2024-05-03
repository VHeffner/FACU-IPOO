<?php
class Tienda {
    private $nombre;
    private $direccion;
    private $telefono;
    private $colProductos;
    private $colVentas;

    public function __construct($nombre, $direccion, $telefono,$colProductos,$colVentas) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->$colProductos = $colProductos;
        $this->$colVentas = $colVentas;
    }

    /**
     * Get the value of colVentas
     */ 
    public function getColVentas()
    {
        return $this->colVentas;
    }

    /**
     * Set the value of colVentas
     *
     * @return  self
     */ 
    public function setColVentas($colVentas)
    {
        $this->colVentas = $colVentas;

        return $this;
    }

    /**
     * Get the value of colProductos
     */ 
    public function getColProductos()
    {
        return $this->colProductos;
    }

    /**
     * Set the value of colProductos
     *
     * @return  self
     */ 
    public function setColProductos($colProductos)
    {
        $this->colProductos = $colProductos;

        return $this;
    }

    public function __toString(){

        return "Nombre: " . $this->nombre . "\n
        
        " . "Dirección: " . $this->direccion . "\n
        
        " . "Teléfono: " . $this->telefono . "\n
        
        " . "Productos: " . $this->colProductos . "\n
        
        " . "Ventas Realizadas: " . $this->colVentas . "\n";
        
        }

        public function buscarProducto($codigoBarra){

            foreach ($this->colProductos as $indice => $producto){
            
            if ($producto->getCodigoBarra() == $codigoBarra){
            
            return $indice;
            
            }
            
            }
            
            return -1;
            
            }


}

