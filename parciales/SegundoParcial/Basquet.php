<?php

class Basquet extends Partido
{

    private $cantInfracciones;
    private $coefPenalizacion;

    public function __construct($idpartido, $fecha, $objEquipo1, $cantGolesE1, $objEquipo2, $cantGolesE2, $cantInfracciones)
    {
        parent::__construct($idpartido, $fecha, $objEquipo1, $cantGolesE1, $objEquipo2, $cantGolesE2);
        $this->cantInfracciones = $cantInfracciones;
        $this->coefPenalizacion = 0.75;
    }

    public function coeficientePartido()
    {
        return parent::getCoefBase() - ($this->coefPenalizacion * $this->cantInfracciones);
    }

    /**
     * Get the value of cantInfracciones
     */
    public function getCantInfracciones()
    {
        return $this->cantInfracciones;
    }

    /**
     * Set the value of cantInfracciones
     *
     * @return  self
     */
    public function setCantInfracciones($cantInfracciones)
    {
        $this->cantInfracciones = $cantInfracciones;

        return $this;
    }

    /**
     * Get the value of coefPenalizacion
     */
    public function getCoefPenalizacion()
    {
        return $this->coefPenalizacion;
    }

    /**
     * Set the value of coefPenalizacion
     *
     * @return  self
     */
    public function setCoefPenalizacion($coefPenalizacion)
    {
        $this->coefPenalizacion = $coefPenalizacion;

        return $this;
    }
}
