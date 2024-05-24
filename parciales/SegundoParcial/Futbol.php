<?php

class Futbol extends Partido{

    private $objCategoria;
    private $coefPartido;

    public function __construct($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2){
        parent::__construct($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2);
        $this->objCategoria = $objEquipo1->getObjCategoria();

        switch($this->objCategoria->getDescripcion()){
            case "Menores":
                $this->coefPartido = 0.13;
                break;
            case "Juveniles":
                $this->coefPartido = 0.19;
                break;
            case "Mayores":
                $this->coefPartido = 0.27;
                break;
            default:
                $this->coefPartido = parent::getCoefBase();
            break;
        }

    }

}