<?php

class Viaje{
    
    // Atributos
    //  AGREGAR $codigoViaje;
    private $destino;
    private $cantidadMaxima;
    private $objPasajeros; // $arrayPasajeros
    private $responsable; // cambiar a $objResponsable

    public function __construct($destino, $cantidadMaxima, $objPasajeros, $responsable)
    {
        $this->destino = $destino;
        $this->cantidadMaxima = $cantidadMaxima;
        $this->objPasajeros = $objPasajeros;
        $this->responsable = $responsable;
    }

    // Getters
    public function getDestino() {
        return $this->destino;
    }
    public function getCantidadMaxima() {
        return $this->cantidadMaxima;
    }
    public function getObjPasajeros() {
        return $this->objPasajeros;
    }
    public function getResponsable() {
        return $this->responsable;
    }


    // Setters
    public function setDestino($destino) {
        $this->destino = $destino;
    }
    public function setCantidadMaxima($cantidadMaxima) {
        $this->cantidadMaxima = $cantidadMaxima;
    }
    public function setObjPasajeros($objPasajeros) {
        $this->objPasajeros = $objPasajeros;
    }
    public function setResponsable($responsable) {
        $this->responsable = $responsable;
    }



    // Métodos

    // Método para agregar pasajero
    public function agregarPasajero($nuevoPasajero) {
        $existe = false; 
        $objPasajeros = $this->getObjPasajeros();
        $i = 0;
        
         while ($i < count($objPasajeros) && !$existe) {
            $pasajeroExistente = $objPasajeros[$i];

            if ($pasajeroExistente->getDNI() == $nuevoPasajero) {
                $existe = true;
            }
         }
        
        return $existe;
    }


    // Método para agregar un empleado, y si el empleado ya existe pedirlo nuevamente
    public function agregarEmpleado($nuevoEmpleado) {

        $existeNum = false;
        foreach ($this->getResponsable() as $empleadoExistente) {
            if ($empleadoExistente->getNumEmpleado() == $nuevoEmpleado) {
                $existeNum = true;
                break; // eliminar break
            } 
        }

        return $existeNum;
    }



    // __toString
    public function __toString() {
        $pasajerosString = "";
        $responsableString = "";
        foreach ($this->getObjPasajeros() as $pasajero) {
            $pasajerosString .= $pasajero . "";
        }
        foreach ($this->getResponsable() as $responsable) {
            $responsableString .= $responsable ."";
        }

        return "\nDestino: " . $this->getDestino() . ".\nCantidad Máxima de Pasajeros: " . $this->getCantidadMaxima() . ".\nPasajeros: \n" . $pasajerosString . ".\nResponsable del Viaje: " .$responsableString. ".\n";
    }


}


?>
