<?php
class Viaje
{
    //DECLARACION DE ATRIBUTOS
    private $codigo_viaje;
    private $destino;
    private $cantidad_maxima_pasajeros;
    private $array_pasajeros; //declaro el arreglo de pasajeros
    private $persona_responsable;

    //METODO CONSTRUCTOR
    public function __construct($codigo_viaje, $destino, $cantidad_maxima_pasajero,$persona_responsable)
    {
        $this->codigo_viaje = $codigo_viaje;
        $this->destino = $destino;
        $this->cantidad_maxima_pasajeros = $cantidad_maxima_pasajero;
        $this->array_pasajeros = array(); //inicializo el arreglo pasajero
        $this->persona_responsable=$persona_responsable;
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
        return $this->array_pasajeros;
    }
    public function getPersona_responsable()
    {
        return $this->persona_responsable;
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
    
    public function agregar_pasajero($nombre, $apellido, $dni,$telefono)
    {
        //Creamos el obj pasajero para (inserte palabra apropiada)de la informacion de pasajero.
        $objPasajero=new Pasajero($nombre,$apellido,$dni,$telefono);
        //**el "array push" es un metodo propio de php que le indico un arreglo al que le quiero agregar un elemento, se lo paso y lo agrega al final
        array_push($this->array_pasajeros, $objPasajero);
    }

    //metodo para modificar la informacion de los pasajero
    public function setPasajero($indice, $nombre, $apellido, $dni,$telefono)
    {
        $objPasajero=new Pasajero($nombre,$apellido,$dni,$telefono);
        $this->array_pasajeros[$indice] = $objPasajero;
    }

    public function setPersona_responsable($persona_responsable)
    {
        $this->persona_responsable = $persona_responsable;

    }

    public function __toString(){ 
        $info_viaje="";
        $info_viaje="Codigo de viaje: ".$this->codigo_viaje.
                    "\nDestino: ".$this->destino.
                    "\nCantidad Maxima de Pasajeros: ".$this->cantidad_maxima_pasajeros+
                    "\nInfo Pasajeros:\n";
                if(count($this->array_pasajeros) < 1){ //Si el array_pasajeros esta vacio
                    $info_viaje .= "NO HAY PASAJEROS\n";
                }else{ //Si no esta vacio
                    for ($i=0 ; $i < count($this->array_pasajeros); $i++) { 
                        $info_viaje .= "Pasajero ".($i+1)."\n".$this->array_pasajeros[$i]->__toString."\n";    
                    }
                }                             
                    $info_viaje .= "\nPersona Responsable: ".$this->persona_responsable->__toString;
                    //$info_viaje .= "texto"; es lo mismo que $info_viaje = $info_viaje."texto";
        return $info_viaje;
    }



}
