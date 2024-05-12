<?php

// Ledesma, Facundo Nehuen
// FAI-4238

include_once 'Viaje.php';
include_once 'Pasajero.php';
include_once 'ResponsableV.php';



$pasajero1 = new Pasajero("Juliana", "Alaz", 41524735, 2994785479);
$pasajero2 = new Pasajero("Lucas", "Avellana", 34154789, 2995478215);
$pasajero3 = new Pasajero("Juan", "Pérez", 12345678, 1234567890);
$pasajeros = [$pasajero1, $pasajero2, $pasajero3];

$empleado = new ResponsableV(1754, 20147852, "Claudio", "Garbanzo");
$empleados = [$empleado];

$viaje = new Viaje("Cordoba", 30, $pasajeros, $empleados);


do {
    echo "=== Menú ===\n";
    echo "1) Ingresar un Nuevo Pasajero: \n";
    echo "2) Modificar información del viaje:\n";
    echo "3) Ver información del viaje:\n";
    echo "4) Cargar información del viaje:\n";
    echo "5) Salir\n";
    echo "Ingrese su opción: ";
    $opcion = trim(fgets(STDIN));


    switch ($opcion) {
        case 1:
            echo "Número de Documento: \n";
            $nuevoDNI = trim(fgets(STDIN));
            $analisisDNI = $viaje->agregarPasajero($nuevoDNI);
            
            if ($analisisDNI != true && $viaje->getCantidadMaxima() >= $pasajeros ) {
                echo "Nombre: \n";
                $nombre = trim(fgets(STDIN));
                echo "Apellido: \n";
                $apellido = trim(fgets(STDIN));
                echo "Teléfono: \n";
                $telefono = trim(fgets(STDIN));
                $newPasajero = new Pasajero($nombre, $apellido, $nuevoDNI, $telefono);

                $pasajeros[] = $newPasajero;
                $viaje->setObjPasajeros($pasajeros);
                echo "Pasajero agregado.\n";
                echo "---------------------------\n";
            } else {
                echo "Error: Pasajero ya cargado en el viaje.\n";
                echo "---------------------------\n";
            }

            break;

        case 2:
            echo "¿Qué desea modificar? \nD) Destino:\nC) Cantidad Máxima de Pasajeros:\nE) Empleado: \n";
            $modificar = trim(fgets(STDIN));

            if ($modificar == "D") {
                echo "Nuevo Destino: ";
                $nuevoDestino = trim(fgets(STDIN));
                $viaje->setDestino($nuevoDestino);
                echo "Destino modificado correctamente.\n";
                echo "------------------------------------------------------\n";

            } elseif($modificar == "C") { 
                echo "Nueva Cantidad Máxima de Pasajeros: ";
                $nuevoMaximo = trim(fgets(STDIN));
                $viaje->setCantidadMaxima($nuevoMaximo);
                echo "Máximo modificado correctamente.\n";
                echo "------------------------------------------------------\n";

            } elseif ($modificar == "E") {
                echo "Ingresar Número de Empleado: ";
                $nuevoIDEmpleado = trim(fgets(STDIN));
                $analisisEmpleado = $viaje->agregarEmpleado($nuevoIDEmpleado);

                if ($analisisEmpleado != true) {
                    echo "Número de Licencia: \n";
                    $nuevaLicencia = trim(fgets(STDIN));
                    echo "Nombre: \n";
                    $nuevoNombre = trim(fgets(STDIN));
                    echo "Apellido: \n";
                    $nuevoApellido = trim(fgets(STDIN));
                    $nuevoEmpleado = new ResponsableV($nuevoIDEmpleado, $nuevaLicencia, $nuevoNombre, $nuevoApellido);
                    $viaje->setResponsable($nuevoEmpleado);
                    echo "---------------------------\n";
                    echo "Empleado agregado correctamente.\n";
                    echo $nuevoEmpleado ."\n";
                    
                } else {
                    echo "---------------------------\n";
                    echo "Error: El empleado ya está asignado a este viaje.\n";
                }
            }
            break;


        case 3:
            echo $viaje. "\n";

            break;

        case 4:
            // Solicitar Información al Usuario
            echo "Ingrese Destino del Viaje: ";
            $destino = trim(fgets(STDIN));
            echo "Ingrese cantidad máxima de pasajeros: ";
            $cantidadMaxima = trim(fgets(STDIN));
            echo "Listado Pasajeros: \n";
            for ($i = 0; $i < count($pasajeros); $i++) {
                echo $pasajeros[$i] . "\n";
            }
            $viaje = new Viaje($destino, $cantidadMaxima, $pasajeros, $empleados);
            echo "Información del viaje cargada correctamente.\n";
            echo "------------------------------------------------------\n";

            break;


        case 5:
            echo "Saliendo. Muchas Gracias!\n";
            echo "---------------------------\n";
            exit;

        default: 
            echo "------------------------------------------------------\n";
            echo "Opción Inválida. Por favor, ingrese alguna opción válida.\n";
            echo "------------------------------------------------------\n";

    }
} while ($opcion != 5);

?>