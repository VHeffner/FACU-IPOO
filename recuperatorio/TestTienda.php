<?php 
require_once 'Tienda.php';
class TesTienda{

    public static function main(){
        
        $producto1 = new Producto("0001", "Marca1", "Rojo", "XL", "Descripción 1", 3);
        $producto2 = new Producto("0002", "Marca2", "Azul", "M", "Descripción 2", 5);
        $producto3 = new Producto("0003", "Marca3", "Verde", "S", "Descripción 3", 8);
        $producto4 = new Producto("0004", "Marca4", "Negro", "L", "Descripción 4", 10);
        
        $productos = [$producto1, $producto2, $producto3, $producto4];

    }


}
