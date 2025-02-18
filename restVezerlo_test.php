<?php
//viszsamenőleg hibajavítás
require_once('restVezerlo.php');
//Teszt: Összes horgászbot lekérdezése

$FishingRodrest = new FishingRodrestKezelo();

/*
print ("Összes horgászbot teszt.\n");
$_GET["view"]="all";
$FishingRodrest->getAllFRod();
print("\n");


//Teszt: Horgászbot lekérdezése ID alapján
print ("Horgászbot ID alapján teszt. \n");
$_GET['view']="single";
$_GET['id']=1;
$FishingRodrest->getFRodById($_GET['id']);
print("\n");
*/

/*
//Teszt: Horgászbot lekérdezése nem létező id alapján
//!!!!! Ki kell javítani !!!!!
print("Nem létező id alapján. \n");
$_GET['view']="single";
$_GET['id']=999;
$FishingRodrest->getFRodById($_GET['id']);
print("\n");
*/
/*
//Horgászbot lekérdezése típus alapján 
print("Típus alapján teszt.\n");
$_GET["view"]="tipus";
$_GET["tid"]="Rakos";
$FishingRodrest->getFRodByType($_GET["tid"]);
print("\n");
*/
//Horgászbot lekérdezése nem létező típus alapján
print("Nem létező típus.\n");
$_GET["view"]="tipus";
$_GET["tid"]="Unkown";
$FishingRodrest->getFRodByType($_GET["tid"]);
print("\n");


