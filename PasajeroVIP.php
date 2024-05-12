<?php

class PasajeroVIP extends Pasajero {

    private $numViajeroFrecuente;
    private $cantMillas;

    public function __construct($nombre, $numAsiento, $numTicket, $numViajeroFrecuente, $cantMillas)
    {
        parent:: __construct($nombre, $numAsiento, $numTicket);
        
        $this->numViajeroFrecuente = $numViajeroFrecuente;
        $this->cantMillas = $cantMillas;
    }

    // Getters
    public function getNumViajeroFrecuente() {
        return $this->numViajeroFrecuente;
    }
    public function getCantMillas() {
        return $this->cantMillas;
    }

    // Setters
    public function setNumViajeroFrecuente($numViajeroFrecuente) {
        $this->numViajeroFrecuente = $numViajeroFrecuente;
    }
    public function setCantMillas($cantMillas) {
        $this->cantMillas = $cantMillas;
    }

    // __toString
    public function __toString()
    {
        $cadena = parent:: __toString();
        $cadena .= "----------------------\nNúmero de Viajero Frecuente: " .$this->getNumViajeroFrecuente(); 
        $cadena .= ".\nCantidad de Millas: " .$this->getCantMillas(). ".\n";
        return $cadena; 
    }

}