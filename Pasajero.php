<?php

class Pasajero{

    // Atributos
    private $nombre;
    private $apellido;
    private $DNI;
    private $telefono;
    private $numAsiento;
    private $numTicket;

    public function __construct($nombre, $apellido, $DNI, $telefono, $numAsiento, $numTicket)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->DNI = $DNI;
        $this->telefono = $telefono;
        $this->numAsiento = $numAsiento;
        $this->numTicket = $numTicket;
    }

    // Getters
    public function getNombre() {
        return $this->nombre;
    }
    public function getApellido() {
        return $this->apellido;
    }
    public function getDNI() {
        return $this->DNI;
    }
    public function getTelefono() {
        return $this->telefono;
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
    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
    public function setDNI($DNI) {
        $this->DNI = $DNI;
    }
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
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
        return 0;
    }



    // __toString
    public function __toString()
    {
        return "\nNombre: " .$this->getNombre(). 
        ".\nApellido: " .$this->getApellido(). 
        ".\nDNI: " .$this->getDNI() . 
        ".\nTeléfono: " .$this->getTelefono(). ".\n"; 
        ".\nNúmero de Asiento: " .$this->getNumAsiento(). 
        ".\nNúmero de Ticket: " .$this->getNumTicket().".\n";
    }

}