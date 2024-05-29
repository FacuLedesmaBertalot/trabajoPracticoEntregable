<?php

class Viaje
{

    // Atributos
    private $destino;
    private $costoViaje;
    private $costoAbonado;
    private $cantidadMaxima;
    private $objPasajeros;
    private $objResponsable;

    public function __construct($destino, $costoViaje, $costoAbonado, $cantidadMaxima, $objPasajeros, $objResponsable)
    {
        $this->destino = $destino;
        $this->costoViaje = $costoViaje;
        $this->costoAbonado = $costoAbonado;
        $this->cantidadMaxima = $cantidadMaxima;
        $this->objPasajeros = $objPasajeros;
        $this->objResponsable = $objResponsable;
    }

    // Getters
    public function getDestino() {
        return $this->destino;
    }
    public function getCostoViaje()
    {
        return $this->costoViaje;
    }
    public function getCostoAbonado()
    {
        return $this->costoAbonado;
    }
    public function getCantidadMaxima()
    {
        return $this->cantidadMaxima;
    }
    public function getObjPasajeros()
    {
        return $this->objPasajeros;
    }
    public function getObjResponsable() {
        return $this->objResponsable;
    }



    // Setters
    public function setDestino($destino) {
        $this->destino = $destino;
    }
    public function setCostoViaje($costoViaje)
    {
        $this->costoViaje = $costoViaje;
    }
    public function setCostoAbonado($costoAbonado)
    {
        $this->costoAbonado = $costoAbonado;
    }
    public function setCantidadMaxima($cantidadMaxima)
    {
        $this->cantidadMaxima = $cantidadMaxima;
    }
    public function setObjPasajeros($objPasajeros)
    {
        $this->objPasajeros = $objPasajeros;
    }
    public function setObjResponsable($objResponsable) {
        $this->objResponsable = $objResponsable;
    }



    // Métodos

    // Método para agregar pasajero
    public function agregarPasajero($nuevoPasajero) {
        $existe = false;
        foreach ($this->getObjPasajeros() as $pasajeroExistente) {
            if ($pasajeroExistente->getDNI() == $nuevoPasajero) {
                $existe = true;
                break;
            } 
        }
        
        return $existe;
    }


    // Método para agregar un empleado, y si el empleado ya existe pedirlo nuevamente
    public function agregarEmpleado($nuevoEmpleado) {

        $existeNum = false;
        foreach ($this->getObjResponsable() as $empleadoExistente) {
            if ($empleadoExistente->getNumEmpleado() == $nuevoEmpleado) {
                $existeNum = true;
                break;
            } 
        }

        return $existeNum;
    }

    // Método que debe incorporar el pasajero a la colección de pasajeros (solo si hay espacio disponible), actualizar los costos abonados y retornar el costo final que deberá ser abonado por el pasajero.
    public function venderPasaje($objPasajero)
    {

        $colPasajeros = $this->getObjPasajeros();
        $costoAbonado = $this->getCostoAbonado();
        $costoViaje = $this->getCostoViaje();

        if ($this->hayPasajesDisponibles() == true) {

            array_push($colPasajeros, $objPasajero);
            $this->getObjPasajeros($colPasajeros);

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

        $colPasajeros = $this->getObjPasajeros();
        $maxPasajeros = $this->getCantidadMaxima();
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
        foreach ($this->getObjPasajeros() as $pasajero) {
            $pasajerosString .= $pasajero . "";
        }

        return "\nCosto del Viaje: " .$this->getCostoViaje().
            ".\nPasajeros: \n" .$pasajerosString. ".\n";
    }
}
