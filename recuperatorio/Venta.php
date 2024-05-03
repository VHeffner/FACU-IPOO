<?php
class Venta {
    private $fechaVenta;
    private $objCliente;
    private $nroFactura;
    private $tipoComprobante;
    private $colItems;

    public function __construct($fechaVenta, $objCliente, $nroFactura, $tipoComprobante, $colItems) {
        $this->fechaVenta = $fechaVenta;
        $this->objCliente = $objCliente;
        $this->nroFactura = $nroFactura;
        $this->tipoComprobante = $tipoComprobante;
        $this->colItems = $colItems;
    }

    public function incorporarProducto($unObjProducto, $cantidadAVender){
        if ($unObjProducto->getCantStock() >= $cantidadAVender) { 
        
        $unItem = new Item($cantidadAVender,$unObjProducto);
        
        $this->getColItems()[] = $unItem; 
        
        $unObjProducto->actualizarStock(-$cantidad);
        
        return $unObjProducto;
        
        } else { 
        
        return null;
        
        } 
        
        }
        
        }
        
}
