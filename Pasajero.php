<?php

class Pasajero{

    // Atributos
    private $nombre;
    private $numAsiento;
    private $numTicket;

    public function __construct($nombre, $numAsiento, $numTicket)
    {
        $this->nombre = $nombre;
        $this->numAsiento = $numAsiento;
        $this->numTicket = $numTicket;
    }

    // Getters
    public function getNombre() {
        return $this->nombre;
    }
    public function getNumAsiento() {
        return $this->numAsiento;
    }
    public function getNumTicket() {
        return $this->numTicket;
    }

    // Setters
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setNumAsiento($numAsiento) {
        $this->numAsiento = $numAsiento;
    }
    public function setNumTicket($numTicket) {
        $this->numTicket = $numTicket;
    }

    // MÉTODOS

    // Método darPorcentajeIncremento
    public function darPorcentajeIncremento() {
        return 10;
    }




    // __toString
    public function __toString()
    {
        return "Nombre: " .$this->getNombre(). 
        ".\nNúmero de Asiento: " .$this->getNumAsiento(). 
        ".\nNúmero de Ticket: " .$this->getNumTicket().".\n";
    }

}