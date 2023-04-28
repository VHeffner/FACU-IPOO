<?php
class Empresa
{
    private $denominacion;
    private $direccion;
    private $coleccion_cliente;
    private $coleccion_bicileta;
    private $coleccion_venta_realizada;

    //METODO CONSTRUCTOR

    public function __construct($denominacion, $direccion, $coleccion_cliente, $coleccion_bicileta, $referencia_coleccion_bicicleta)
    {
        $this->denominacion = $denominacion;
        $this->direccion = $direccion;
        $this->coleccion_cliente = $coleccion_cliente;
        $this->coleccion_bicileta = $coleccion_bicileta;
        $this->coleccion_venta_realizada = $referencia_coleccion_bicicleta;
    }
    //METODOS DE ACCESO
    public function getDenominacion()
    {
        return $this->denominacion;
    }
    public function setDenominacion($denominacion)
    {
        $this->denominacion = $denominacion;
    }
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }
    public function getColeccion_cliente()
    {
        return $this->coleccion_cliente;
    }
    public function setColeccion_cliente($coleccion_cliente)
    {
        $this->coleccion_cliente = $coleccion_cliente;
    }
    public function getColeccion_bicicleta()
    {
        return $this->coleccion_bicileta;
    }
    public function setColeccion_bicicleta($coleccion_bicicleta)
    {
        $this->coleccion_bicileta = $coleccion_bicicleta;
    }
    public function getColeccion_venta_realizada()
    {
        return $this->coleccion_venta_realizada;
    }
    public function setColeccion_venta_realizada($coleccion_venta_realizada)
    {
        $this->coleccion_venta_realizada = $coleccion_venta_realizada;
    }

    public function __toString()
    {
        return "Denominacion: " . $this->denominacion .
            "\nDireccion: " . $this->direccion .
            "\n Coleccion clientes: " . $this->coleccion_cliente .
            "\nColeccion bicicletas: " . $this->coleccion_bicileta .
            "\nColeccion venta relizada" . $this->coleccion_venta_realizada;
    }
    public function retornar_bicicleta($codigo_bici)
    {
        $i = 0;
        do {
            $objBic = $this->coleccion_bicileta[$i];
            $i++;
        } while ($codigo_bici != $objBic->getCodigo && count($this->coleccion_bicileta) > $i);
        return $objBic;
    }


    public function registrarVenta($col_codigo_bici, $obj_cliente)
    {

        if ($obj_cliente->getAlta == true) {
            $precio_final=0;
            $array_bicicleta = [];
            for ($i = 0; $i < count($col_codigo_bici); $i++) {
                $bici_enI = $this->retornar_bicicleta($col_codigo_bici);
                if ($col_codigo_bici[$i] == $bici_enI->getCodigo) {
                    if($bici_enI->getActiva==true){
                    array_push($array_bicicleta, $bici_enI);
                    $precio_final=$precio_final+$bici_enI->dar_precio_venta;
                    }
                }
            }
            
              $obj_venta= new Venta(count($this->coleccion_venta_realizada),date("d/m/y"),$obj_cliente,$array_bicicleta,$precio_final);
              array_push($this->coleccion_venta_realizada,$obj_venta);


        }
        return $precio_final;
    }
    public function retornar_ventas_Xcliente($tipo,$numero_documento){
        $encontrado=false;
        $i=0;
        $array_ventas=[];
        do {
            $cliente_posI=$this->coleccion_cliente[$i];
            if($tipo==$cliente_posI->getTipo_documento&&$numero_documento==$cliente_posI->getNumero_documento){
                $encontrado=true;
            }
        } while ($encontrado ==false && $i<count($this->coleccion_cliente));
        for ($i=0; $i <count($this->coleccion_venta_realizada) ; $i++) { 
            if($this->coleccion_venta_realizada[$i]->getReferencia_cliente==$cliente_posI){
                array_push($array_ventas,$this->coleccion_venta_realizada[$i]);
            }
        }
        return $array_ventas;
    }

}
