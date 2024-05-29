<?php

include_once 'Viaje.php';
include_once 'Pasajero.php';
include_once 'ResponsableV.php';
include_once 'PasajeroEstandar.php';
include_once 'PasajeroVIP.php';
include_once 'PasajeroNE.php';

$empleado = new ResponsableV(1754, 20147852, "Claudio", "Garbanzo");
$empleados = [$empleado];


$objViaje = new Viaje("La Plata", 1000, 0, 50, [], $empleados);



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

                echo "Nombre: ";
                $nombre = trim(fgets(STDIN));
                echo "Apellido: ";
                $apellido = trim(fgets(STDIN));
                echo "DNI: ";
                $DNI = trim(fgets(STDIN));
                echo "Teléfono: ";
                $telefono = trim(fgets(STDIN));
                echo "Ingrese número de asiento: ";
                $numAsiento = trim(fgets(STDIN));
                echo "Ingrese número de ticket: ";
                $numTicket = trim(fgets(STDIN));

                $pasajero = new PasajeroEstandar($nombre, $apellido, $DNI, $telefono,  $numAsiento, $numTicket);
                $costoFinal = $objViaje->venderPasaje($pasajero);

                echo "Costo final del pasaje: $" . $costoFinal . ".\n";
            }

            break;

        case 2:
            if ($objViaje->hayPasajesDisponibles() == true) {
                echo "Nombre: ";
                $nombre = trim(fgets(STDIN));
                echo "Apellido: ";
                $apellido = trim(fgets(STDIN));
                echo "DNI: ";
                $DNI = trim(fgets(STDIN));
                echo "Teléfono: ";
                $telefono = trim(fgets(STDIN));
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

                $pasajeroNE = new PasajeroNE($nombre, $apellido, $telefono, $DNI, $numAsiento, $numTicket, $sillaDeRuedas, $asistencia, $comidaEspecial);
                $costoFinal = $objViaje->venderPasaje($pasajeroNE);

                echo "Costo final del pasaje: $" . $costoFinal . ".\n";
            }

            break;


        case 3:
            if ($objViaje->hayPasajesDisponibles() == true) {
                echo "Nombre: ";
                $nombre = trim(fgets(STDIN));
                echo "Apellido: ";
                $apellido = trim(fgets(STDIN));
                echo "DNI: ";
                $DNI = trim(fgets(STDIN));
                echo "Teléfono: ";
                $telefono = trim(fgets(STDIN));
                echo "Ingrese número de asiento: ";
                $numAsiento = trim(fgets(STDIN));
                echo "Ingrese número de ticket: ";
                $numTicket = trim(fgets(STDIN));
                echo "Ingrese número de viajero frecuente: ";
                $numViajeroFrecuente = trim(fgets(STDIN));
                echo "Ingrese cantidad de millas: ";
                $cantMillas = trim(fgets(STDIN));

                $pasajeroVIP = new PasajeroVIP($nombre, $apellido, $DNI, $telefono, $numAsiento, $numTicket, $numViajeroFrecuente, $cantMillas);
                $costoFinal = $objViaje->venderPasaje($pasajeroVIP);

                echo "Costo final del pasaje: $" . $costoFinal . ".\n";
            }

            break;

        case 4:
            echo $objViaje . "\n";
            break;

        case 5:
            echo "Saliendo...\n";
            break;

        default:
            echo "Opción no válida. Intente nuevamente.\n";
            break;
    }
} while ($opcion != 5);




// Test Viejo

// do {
//     echo "=== Menú ===\n";
//     echo "1) Ingresar un Nuevo Pasajero: \n";
//     echo "2) Modificar información del viaje:\n";
//     echo "3) Ver información del viaje:\n";
//     echo "4) Cargar información del viaje:\n";
//     echo "5) Salir\n";
//     echo "Ingrese su opción: ";
//     $opcion = trim(fgets(STDIN));


//     switch ($opcion) {
//         case 1:
//             echo "Número de Documento: \n";
//             $nuevoDNI = trim(fgets(STDIN));
//             $analisisDNI = $viaje->agregarPasajero($nuevoDNI);
            
//             if ($analisisDNI != true) {
//                 // Agregar pasajero al viaje si existe
//                 echo "Nombre: \n";
//                 $nombre = trim(fgets(STDIN));
//                 echo "Apellido: \n";
//                 $apellido = trim(fgets(STDIN));
//                 echo "Teléfono: \n";
//                 $telefono = trim(fgets(STDIN));
//                 $newPasajero = new Pasajero($nombre, $apellido, $nuevoDNI, $telefono);

//                 $pasajeros[] = $newPasajero;
//                 $viaje->setObjPasajeros($pasajeros);
//                 echo "Pasajero agregado.\n";
//                 echo "---------------------------\n";
//             } else {
//                 echo "Error: Pasajero ya cargado en el viaje.\n";
//                 echo "---------------------------\n";
//             }

//             break;

//         case 2:
//             echo "¿Qué desea modificar? \nD) Destino:\nC) Cantidad Máxima de Pasajeros:\nE) Empleado: \n";
//             $modificar = trim(fgets(STDIN));

//             if ($modificar == "D") {
//                 echo "Nuevo Destino: ";
//                 $nuevoDestino = trim(fgets(STDIN));
//                 $viaje->setDestino($nuevoDestino);
//                 echo "Destino modificado correctamente.\n";
//                 echo "------------------------------------------------------\n";

//             } elseif($modificar == "C") {
//                 echo "Nueva Cantidad Máxima de Pasajeros: ";
//                 $nuevoMaximo = trim(fgets(STDIN));
//                 $viaje->setCantidadMaxima($nuevoMaximo);
//                 echo "Máximo modificado correctamente.\n";
//                 echo "------------------------------------------------------\n";

//             } elseif ($modificar == "E") {
//                 echo "Ingresar Número de Empleado: ";
//                 $nuevoIDEmpleado = trim(fgets(STDIN));
//                 $analisisEmpleado = $viaje->agregarEmpleado($nuevoIDEmpleado);

//                 if ($analisisEmpleado != true) {
//                     echo "Número de Licencia: \n";
//                     $nuevaLicencia = trim(fgets(STDIN));
//                     echo "Nombre: \n";
//                     $nuevoNombre = trim(fgets(STDIN));
//                     echo "Apellido: \n";
//                     $nuevoApellido = trim(fgets(STDIN));
//                     $nuevoEmpleado = new ResponsableV($nuevoIDEmpleado, $nuevaLicencia, $nuevoNombre, $nuevoApellido);
//                     $viaje->setResponsable($nuevoEmpleado);
//                     echo "---------------------------\n";
//                     echo "Empleado agregado correctamente.\n";
//                     echo $nuevoEmpleado ."\n";
                    
//                 } else {
//                     echo "---------------------------\n";
//                     echo "Error: El empleado ya está asignado a este viaje.\n";
//                 }
//             }
//             break;


//         case 3:
//             echo $viaje. "\n";

//             break;

//         case 4:
//             // Solicitar Información al Usuario
//             echo "Ingrese Destino del Viaje: ";
//             $destino = trim(fgets(STDIN));
//             echo "Ingrese cantidad máxima de pasajeros: ";
//             $cantidadMaxima = trim(fgets(STDIN));
//             echo "Listado Pasajeros: \n";
//             for ($i = 0; $i < count($pasajeros); $i++) {
//                 echo $pasajeros[$i] . "\n";
//             }
//             $viaje = new Viaje($destino, $cantidadMaxima, $pasajeros, $empleados);
//             echo "Información del viaje cargada correctamente.\n";
//             echo "------------------------------------------------------\n";


//             break;


//         case 5:
//             echo "Saliendo. Muchas Gracias!\n";
//             echo "---------------------------\n";
//             exit;

//         default: 
//             echo "------------------------------------------------------\n";
//             echo "Opción Inválida. Por favor, ingrese alguna opción válida.\n";
//             echo "------------------------------------------------------\n";

//     }
// } while ($opcion != 5);
