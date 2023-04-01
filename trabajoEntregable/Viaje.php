<?php
class Viaje
{
    //DECLARACION DE ATRIBUTOS
    private $codigo_viaje;
    private $destino;
    private $cantidad_maxima_pasajeros;
    private $array_pasajeros; //declaro el arreglo de pasajeros

    //METODO CONSTRUCTOR
    public function __construct($codigo_viaje, $destino, $cantidad_maxima_pasajero)
    {
        $this->codigo_viaje = $codigo_viaje;
        $this->destino = $destino;
        $this->cantidad_maxima_pasajeros = $cantidad_maxima_pasajero;
        $this->array_pasajeros = array(); //inicializo el arreglo pasajero
    }
    // METODOS DE ACCESO 

    //-- o b s e r v a d o r --
    public function getCodigo_viaje()
    {
        return $this->codigo_viaje;
    }
    public function getDestino()
    {
        return $this->destino;
    }
    public function getCantidad_maxima_pasajero()
    {
        return $this->cantidad_maxima_pasajeros;
    }
    public function getArray_pasajeros()
    {
        $info_pasajeros="";
        for ($i=0; $i <count($this->array_pasajeros) ; $i++) { 
            $info_pasajeros=$info_pasajeros+"el pasajero en la posicion: ".$i;
            $info_pasajeros=$info_pasajeros.implode(" ,",$this->array_pasajeros[$i])."\n";//el (implode) nos dara cada elemento del arrego en forma de string separado por lo que le digamois
        }
        return $info_pasajeros;
    }

    //--m o d i f i c a d o r --
    public function setCodigo_viaje($codigo_viaje)
    {
        $this->codigo_viaje = $codigo_viaje;
    }

    public function setDestino($destino)
    {
        $this->destino = $destino;
    }

    public function setCantidad_maxima_pasajero($cantidad_maxima_pasajeros)
    {
        $this->cantidad_maxima_pasajeros = $cantidad_maxima_pasajeros;
    }


    //--propia del tipo--
    // esto tienen sentido dentro de la clase viaje ya que necesitamos una forma de agregar pasajeros al arreglo
    
    public function setAgregar_pasajero($nombre, $apellido, $dni)
    {

        // este arreglo asociativo almacena la informacion individual de cada pasajero 
        $array_carga_informacion_pasajero = ["nombre" => $nombre, "apellido" => $apellido, "dni" => $dni];
        //este arreglo multidimensional almacenara la informacion de todos los pasajeros cargados en el arreglo anterior
        //**el "array push" es un metodo propio de php que le indico un arreglo al que le quiero agregar un elemento, se lo paso y lo agrega al final
        array_push($array_pasajeros, $array_carga_informacion_pasajero);
    }

    //metodo para modificar la informacion de los pasajero
    public function setPasajero($indice, $nombre, $apellido, $dni)
    {
        $array_carga_informacion_pasajero = ["nombre" => $nombre, "apellido" => $apellido, "dni" => $dni];
        $array_pasajeros[$indice] = $array_carga_informacion_pasajero;
    }

    public function __toString(){
        $info_viaje="";
        $info_viaje=$this->codigo_viaje+$this->destino+$this->cantidad_maxima_pasajeros;
    
        return $info_viaje;
    }

}
