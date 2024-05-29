<?php

class PasajeroEstandar extends Pasajero
{
    public function __construct($nombre, $apellido, $DNI, $telefono, $numAsiento, $numTicket)
    {
        parent:: __construct($nombre, $apellido, $DNI, $telefono, $numAsiento, $numTicket);
    }


    // Método darPorcentajeIncremento
    public function darPorcentajeIncremento()
    {
        $incremento = parent::darPorcentajeIncremento();
        $incremento = 10;
        return $incremento;
    }


    // __toString
    public function __toString()
    {
        $cadena = parent::__toString();
        $cadena .="\nIncremento: " .$this->darPorcentajeIncremento() . "\n";
        return $cadena;
    }


}