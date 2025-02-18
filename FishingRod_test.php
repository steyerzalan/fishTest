<?php
require_once("FishingRod.php");

//Példányosítás
$fr= new FishingRod();

//összes horgászbot lekérdezése
echo "<h2>Összes horgászbotot</h2>";
$ar=$fr->getAllFishingRods();
if (!empty($ar))
{
    foreach ($ar as $pbot)
    {
        echo "id: " . $pbot['fr_ID'] . " - Név: " . $pbot['name'] . "<br>";
    }
}
else
{
    echo "Nincs találat az össze horgászbot leérdezésre!";
}