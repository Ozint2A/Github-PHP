<?php
// require_once("Vehicule.php");
// $monVehicule = new Vehicule("ABC2B", 6, 170, 15, 10);

// echo($monVehicule->getVitesse() . "\n");

// $monVehicule->accelerer();
// echo($monVehicule->getVitesse() . "\n");
// $monVehicule->freiner();
// echo($monVehicule->getVitesse() . "\n");

// for($i=1;$i<=30;$i++){
//     $monVehicule->accelerer();
// }

// echo($monVehicule->getVitesse() . "\n");

// require_once("Camion.php");

// $monCamion = new Camion('RN2A', 12, 110, 17, 22);
// $monCamion->setCapaciteRemorque(100);
// $monCamion->remplirRemorque(100);
// $monCamion->viderTotalRemorque();
// echo($monCamion->getQuantiteRemplissage());

require_once("Voiture.php");

$maVoiture = new Voiture("ABC2A",3,180,20,22);
$maVoiture->setCapaciteCoffre(100);
$maVoiture->remplirCoffre(80);
$maVoiture->viderCoffre(20);
echo($maVoiture->getQuantiteTransportee());