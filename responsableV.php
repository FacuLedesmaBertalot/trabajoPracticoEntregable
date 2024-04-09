<?php

class ResponsableV{


    // Atributos
    private $numEmpleado;
    private $numLicencia;
    private $nombreEmpleado;
    private $apellidoEmpleado;

    public function __construct($numEmpleado, $numLicencia, $nombreEmpleado, $apellidoEmpleado )
    {
        $this->numEmpleado = $numEmpleado;
        $this->numLicencia = $numLicencia;
        $this->nombreEmpleado = $nombreEmpleado;
        $this->apellidoEmpleado = $apellidoEmpleado;

    }


    // Getters
    public function getNumEmpleado() {
        return $this->numEmpleado;
    }
    public function getNumLicencia() {
        return $this->numLicencia;
    }
    public function getNombreEmpleado() {
        return $this->nombreEmpleado;
    }
    public function getApellidoEmpleado() {
        return $this->apellidoEmpleado;
    }

    // Setters
    public function setNumEmpleado($numEmpleado) {
        $this->numEmpleado = $numEmpleado;
    }
    public function setNumLicencia($numLicencia) {
        $this->numLicencia = $numLicencia;
    }
    public function setNombreEmpleado($nombreEmpleado) {
        $this->nombreEmpleado = $nombreEmpleado;
    }
    public function setApellidoEmpleado($apellidoEmpleado) {
        $this->apellidoEmpleado = $apellidoEmpleado;
    }





    // __toString
    public function __toString()
    {
        return "Número empleado: " .$this->getNumEmpleado(). ".\nNúmero de Licencia: " .$this->getNumLicencia(). ".\nNombre: " .$this->getNombreEmpleado(). ".\nApellido: " .$this->getApellidoEmpleado(). ".\n";
    }



}