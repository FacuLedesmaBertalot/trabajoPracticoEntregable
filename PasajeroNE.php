<?php

class PasajeroNE extends Pasajero{

    private $sillaDeRuedas;
    private $asistencia;
    private $comidaEspecial;

    public function __construct($nombre, $apellido, $DNI, $telefono, $numAsiento, $numTicket, $sillaDeRuedas, $asistencia, $comidaEspecial)
    {
        parent:: __construct($nombre, $apellido, $DNI, $telefono, $numAsiento, $numTicket);
        
        $this->sillaDeRuedas = $sillaDeRuedas;
        $this->asistencia = $asistencia;
        $this->comidaEspecial = $comidaEspecial;
    }

    // Getters
    public function getSillaDeRuedas() {
        return $this->sillaDeRuedas;
    }
    public function getAsistencia() {
        return $this->asistencia;
    }
    public function getComidaEspecial() {
        return $this->comidaEspecial;
    }

    // Setters
    public function setSillaDeRuedas($sillaDeRuedas) {
        $this->sillaDeRuedas = $sillaDeRuedas;
    }
    public function setAsistencia($asistencia) {
        $this->asistencia = $asistencia;
    }
    public function setComidaEspecial($comidaEspecial) {
        $this->comidaEspecial = $comidaEspecial;
    }

    // MÉTODOS

    // Método para dar porcentaje incremento en Pasajeros con Necesidades Especiales
    public function darPorcentajeIncremento()
    {
        $incremento = parent::darPorcentajeIncremento();

        if ($this->getSillaDeRuedas() == true && $this->getAsistencia() == true && $this->getComidaEspecial() == true) {
            $incremento = 30;
        } elseif ($this->getSillaDeRuedas() == true || $this->getAsistencia() == true || $this->getComidaEspecial() == true) {
            $incremento = 15;
        }
        
        return $incremento;
    }



    // __toString
    public function __toString()
    {
        $cadena = parent:: __toString();
        $cadena .= "----------------------\nSilla de Ruedas: " .$this->getSillaDeRuedas();  
        $cadena .= "\nAsistencia: " .$this->getAsistencia();
        $cadena .= "\nComida Especial: " .$this->getComidaEspecial(). ".\n";
        return $cadena;        
    }

}