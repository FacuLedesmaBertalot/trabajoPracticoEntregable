<?php

class Pasajero{

    // Atributos
    private $nombre;
    private $apellido;
    private $DNI;
    private $telefono;

    public function __construct($nombre, $apellido, $DNI, $telefono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->DNI = $DNI;
        $this->telefono = $telefono;
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




    // __toString
    public function __toString()
    {
        return "Nombre: " .$this->getNombre(). ".\nApellido: " .$this->getApellido(). ".\nDNI: " .$this->getDNI().".\nTeléfono: " .$this->getTelefono(). ".\n";
    }

}
