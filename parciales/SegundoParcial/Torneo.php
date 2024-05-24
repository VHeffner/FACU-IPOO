<?php
class Torneo
{
    private $partidos;
    private $premio;
    private $deporte;

    public function __construct($premio)
    {
        $this->premio = $premio;
    }

    /**
     * Get the value of partidos
     */
    public function getPartidos()
    {
        return $this->partidos;
    }

    /**
     * Set the value of partidos
     *
     * @return  self
     */
    public function setPartidos($partidos)
    {
        $this->partidos = $partidos;

        return $this;
    }

    /**
     * Get the value of premio
     */
    public function getPremio()
    {
        return $this->premio;
    }

    /**
     * Set the value of premio
     *
     * @return  self
     */
    public function setPremio($premio)
    {
        $this->premio = $premio;

        return $this;
    }



    /**
     * Get the value of deporte
     */
    public function getDeporte()
    {
        return $this->deporte;
    }

    /**
     * Set the value of deporte
     *
     * @return  self
     */
    public function setDeporte($deporte)
    {
        $this->deporte = $deporte;

        return $this;
    }
    public function ingresarPartido($objEquipo1, $objEquipo2, $fecha, $tipoPartido)
    {

        $unPartido = null;

        if ($this->deporte == $tipoPartido) {

            if ($this->equiposCompatibles($objEquipo1, $objEquipo2)) {

                $unPartido = new Partido($this->darId(), $fecha, $objEquipo1, 0, $objEquipo2, 0);
                $this->partidos = $unPartido;
            }
        }

        return $unPartido;
    }

    private function equiposCompatibles($objEquipo1, $objEquipo2)
    {

        $valido = false;
        //Si tienen la misma categoria
        if ($objEquipo1->getObjCategoria()->getDescripcion() == $objEquipo2->getObjCategoria()->getDescripcion()) {
            //Si tienen la misma cantidad de jugadores
            if ($objEquipo1->getCantJugadores() == $objEquipo2->getCantJugadores()) {

                $valido = true;
            }
        }

        return $valido;
    }

    private function darId()
    {
        return $this->partidos->length() + 1;
    }

    public function darGanadores($deporte)
    {

        $colGanadores = null;

        if ($this->deporte == $deporte) {

            foreach ($this->partidos as $partido) {
                $unPartido = $partido->ganadorPartido();
                //Si no empataron, o sea, hubo un ganador
                if ($unPartido != null) {
                    $colGanadores = $unPartido;
                }
            }
        }

        return $colGanadores;
    }

    public function calcularPremioPartido($OBJPartido)
    {

        $equipoGanador = $OBJPartido->ganadorPartido();
        $premioPartido = $OBJPartido->coeficientePartido() * $this->premio;

        $arrAsoc = [
            "equipoGanador" => $equipoGanador,
            "premioPartido" => $premioPartido
        ];

        return $arrAsoc;
    }
}
