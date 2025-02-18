<?php
require_once("FishingRodrestKezelo.php");

//példányosítás
$fishingRodrestKezelo= new FishingRodrestKezelo();

//teszt
//Összes horgászbot lek. teszt.
print ("Összes horgászbot teszt\n");

echo json_encode([
    "message" => "Összes horgászbot teszt:\n",
    "data" => $fishingRodrestKezelo->getAllFRod()
]);
print("\n");

//horgászbot lek.id alapján teszt.
print ("horgászbot lek.id\n");

echo json_encode([
    "message" => "Horgászbot id. teszt:\n",
    "data" => $fishingRodrestKezelo->getFRodById(1)
]);
print("\n");

//horgászbot lek. UNKNOWN id alapján teszt.
//javítani
/*
print ("horgászbot lek. Ismeretlen id\n");

echo json_encode([
    "message" => "Horgászbot id. Ismeretlen teszt:\n",
    "data" => $fishingRodrestKezelo->getFRodById(999)
]);
print("\n");
*/

//horgászbot lek.típus alapján teszt.
print ("horgászbot lek.típus\n");

echo json_encode([
    "message" => "Horgászbot típus teszt:\n",
    "data" => $fishingRodrestKezelo->getFRodByType('Rakos')
]);
print("\n");

//horgászbot lek.UNKOWN típus alapján teszt.
print ("horgászbot lek.ismeretlen típus\n");

echo json_encode([
    "message" => "Horgászbot UNKNOWN típus teszt:\n",
    "data" => $fishingRodrestKezelo->getFRodByType('Unknown')
]);
print("\n");

//hibás kérés tesztelése.
print ("hibás lek. típus\n");

echo json_encode([
    "message" => "Hibás típus teszt:\n",
    "data" => $fishingRodrestKezelo->getFault()
]);
print("\n");

