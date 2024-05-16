<?php

include_once 'Viaje.php';
include_once 'Pasajero.php';
include_once 'PasajeroVIP.php';
include_once 'PasajeroNE.php';


$objViaje = new Viaje(1000, 0, 50, []);



function mostrarMenu()
{
    echo "Menú de Opciones:\n";
    echo "1. Agregar Pasajero\n";
    echo "2. Agregar Pasajero con Necesidades Especiales\n";
    echo "3. Agregar Pasajero VIP\n";
    echo "4. Mostrar Detalles del Viaje\n";
    echo "5. Salir\n";
    echo "Seleccione una opción: ";
}

do {
    mostrarMenu();
    $opcion = trim(fgets(STDIN));

    switch ($opcion) {
        case 1:
            if ($objViaje->hayPasajesDisponibles() == true) {

                echo "Ingrese nombre del pasajero: ";
                $nombre = trim(fgets(STDIN));
                echo "Ingrese número de asiento: ";
                $numAsiento = trim(fgets(STDIN));
                echo "Ingrese número de ticket: ";
                $numTicket = trim(fgets(STDIN));
    
                $pasajero = new Pasajero($nombre, $numAsiento, $numTicket);
                $costoFinal = $objViaje->venderPasaje($pasajero);
                
                echo "Costo final del pasaje: $" .$costoFinal. ".\n";
            }

            break;

        case 2:
            if ($objViaje->hayPasajesDisponibles() == true) {
            echo "Ingrese nombre del pasajero: ";
            $nombre = trim(fgets(STDIN));
            echo "Ingrese número de asiento: ";
            $numAsiento = trim(fgets(STDIN));
            echo "Ingrese número de ticket: ";
            $numTicket = trim(fgets(STDIN));
            echo "¿Necesita silla de ruedas? (1: Sí, 0: No): ";
            $sillaDeRuedas = trim(fgets(STDIN));
            if ($sillaDeRuedas == "1") {
                $sillaDeRuedas = true;
            }
            echo "¿Necesita asistencia? (1: Sí, 0: No): ";
            $asistencia = trim(fgets(STDIN));
            if ($asistencia == "1") {
                $asistencia = true;
            }
            echo "¿Necesita comida especial? (1: Sí, 0: No): ";
            $comidaEspecial = trim(fgets(STDIN));
            if ($comidaEspecial == "1") {
                $comidaEspecial = true;
            }

            $pasajeroNE = new PasajeroNE($nombre, $numAsiento, $numTicket, $sillaDeRuedas, $asistencia, $comidaEspecial);
            $costoFinal = $objViaje->venderPasaje($pasajeroNE);
            
            echo "Costo final del pasaje: $" .$costoFinal. ".\n";
            }

            break;
        

        case 3:
        if ($objViaje->hayPasajesDisponibles() == true) {
            echo "Ingrese nombre del pasajero: ";
            $nombre = trim(fgets(STDIN));
            echo "Ingrese número de asiento: ";
            $numAsiento = trim(fgets(STDIN));
            echo "Ingrese número de ticket: ";
            $numTicket = trim(fgets(STDIN));
            echo "Ingrese número de viajero frecuente: ";
            $numViajeroFrecuente = trim(fgets(STDIN));
            echo "Ingrese cantidad de millas: ";
            $cantMillas = trim(fgets(STDIN));

            $pasajeroVIP = new PasajeroVIP($nombre, $numAsiento, $numTicket, $numViajeroFrecuente, $cantMillas);
            $costoFinal = $objViaje->venderPasaje($pasajeroVIP);
            
            echo "Costo final del pasaje: $" .$costoFinal. ".\n";

        }

            break;

        case 4:
            echo $objViaje ."\n";
            break;

        case 5:
            echo "Saliendo...\n";
            break;

        default:
            echo "Opción no válida. Intente nuevamente.\n";
            break;
    }

} while ($opcion != 5);

?>


























// $objpasajeroNE1 = new PasajeroNE("Juan", 1, 1, false, false, true);
// $objpasajeroNE2 = new PasajeroNE("Alberto", 2, 2, true, true, true);
// $objPasajeroVIP1 = new PasajeroVIP("Florencia", 3, 3, 250, 1000); // pasajera VIP con millas acumuladas de mas de 300
// $objPasajeroVIP2 = new PasajeroVIP("Carla", 4, 4, 200, 200); // pasajera VIP con millas acumuladas de menos de 300
// $objPasajeroNormal = new Pasajero("Cristian", 5, 170);

// $costoPasajeroNE1 = $objViaje->venderPasaje($objpasajeroNE1);
// $costoPasajeroNE2 = $objViaje->venderPasaje($objpasajeroNE2);
// $costoPasajeroVIP1 = $objViaje->venderPasaje($objPasajeroVIP1);
// $costoPasajeroVIP2 = $objViaje->venderPasaje($objPasajeroVIP2);
// $costoPasajeroNormal = $objViaje->venderPasaje($objPasajeroNormal);
// echo $costoPasajeroNE1 . "\n";
// echo $costoPasajeroNE2 . "\n";
// echo $costoPasajeroVIP1 . "\n";
// echo $costoPasajeroVIP2 . "\n";
// echo $costoPasajeroNormal . "\n";


?>