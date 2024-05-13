<?php

class Viaje
{

    // Atributos
    private $costoViaje;
    private $costoAbonado;
    private $maxPasajeros;
    private $colPasajeros;

    public function __construct($costoViaje, $costoAbonado, $maxPasajeros, $colPasajeros)
    {
        $this->costoViaje = $costoViaje;
        $this->costoAbonado = $costoAbonado;
        $this->maxPasajeros = $maxPasajeros;
        $this->colPasajeros = $colPasajeros;
    }

    // Getters
    public function getCostoViaje()
    {
        return $this->costoViaje;
    }
    public function getCostoAbonado()
    {
        return $this->costoAbonado;
    }
    public function getMaxPasajeros()
    {
        return $this->maxPasajeros;
    }
    public function getColPasajeros()
    {
        return $this->colPasajeros;
    }



    // Setters
    public function setCostoViaje($costoViaje)
    {
        $this->costoViaje = $costoViaje;
    }
    public function setCostoAbonado($costoAbonado)
    {
        $this->costoAbonado = $costoAbonado;
    }
    public function setMaxPasajeros($maxPasajeros)
    {
        $this->maxPasajeros = $maxPasajeros;
    }
    public function setColPasajeros($colPasajeros)
    {
        $this->colPasajeros = $colPasajeros;
    }



    // Métodos

    // Método que debe incorporar el pasajero a la colección de pasajeros (solo si hay espacio disponible), actualizar los costos abonados y retornar el costo final que deberá ser abonado por el pasajero.
    public function venderPasaje($objPasajero)
    {

        $colPasajeros = $this->getColPasajeros();
        $costoAbonado = $this->getCostoAbonado();
        $costoViaje = $this->getCostoViaje();

        if ($this->hayPasajesDisponibles() == true) {

            array_push($colPasajeros, $objPasajero);
            $this->setColPasajeros($colPasajeros);

            $incremento = $objPasajero->darPorcentajeIncremento() / 100;
            $costoAbonado = $this->getCostoAbonado() + $incremento;
            $this->setCostoAbonado($costoAbonado);
            $costoFinal = $costoViaje + ($costoViaje * $incremento);

            return $costoFinal;
        }
    }


    // Método que retorna booleano si la cantidad de pasajeros disponibles es posible
    public function hayPasajesDisponibles()
    {

        $colPasajeros = $this->getColPasajeros();
        $maxPasajeros = $this->getMaxPasajeros();
        $esPosible = false;

        if (count($colPasajeros) < $maxPasajeros) {
            $esPosible = true;
        }
        return $esPosible;
    }




    // __toString
    public function __toString()
    {
        $pasajerosString = "";
        foreach ($this->getColPasajeros() as $pasajero) {
            $pasajerosString .= $pasajero . "";
        }

        return "\nCosto del Viaje: " . $this->getCostoViaje() .
            ".\nCosto Abonado: " . $this->getCostoAbonado() .
            ".\nPasajeros: \n" . $pasajerosString . ".\n";
    }
}