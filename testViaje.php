<?php

// Ledesma, Facundo Nehuen
// FAI-4238

include_once 'Viaje.php';
include_once 'Pasajero.php';
include_once 'PasajeroVIP.php';
include_once 'PasajeroNE.php';


$objViaje = new Viaje(1000, 0, 50, []);


$objpasajeroNE1 = new PasajeroNE("Juan", 1, 1, false, false, true);
$objpasajeroNE2 = new PasajeroNE("Alberto", 2, 2, true, true, true);
$objPasajeroVIP1 = new PasajeroVIP("Florencia", 3, 3, 250, 1000); // pasajera VIP con millas acumuladas de mas de 300
$objPasajeroVIP2 = new PasajeroVIP("Carla", 4, 4, 200, 200); // pasajera VIP con millas acumuladas de menos de 300
$objPasajeroNormal = new Pasajero("Cristian", 5, 170);

$costoPasajeroNE1 = $objViaje->venderPasaje($objpasajeroNE1);
$costoPasajeroNE2 = $objViaje->venderPasaje($objpasajeroNE2);
$costoPasajeroVIP1 = $objViaje->venderPasaje($objPasajeroVIP1);
$costoPasajeroVIP2 = $objViaje->venderPasaje($objPasajeroVIP2);
$costoPasajeroNormal = $objViaje->venderPasaje($objPasajeroNormal);
echo $costoPasajeroNE1 . "\n";
echo $costoPasajeroNE2 . "\n";
echo $costoPasajeroVIP1 . "\n";
echo $costoPasajeroVIP2 . "\n";
echo $costoPasajeroNormal . "\n";


?>