<?php
require_once("FishingRodrestKezelo.php");

$view = "";
if(isset($_GET["view"]))
    $view=$_GET["view"];


switch($view){
    case "all":
       
        $FishingRodrest = new FishingRodrestKezelo();
        $FishingRodrest->getAllFRod();
        break;
    
    case "single":
        $FishingRodrest = new FishingRodrestKezelo();
        $FishingRodrest->getFRodById($_GET["id"]);
        break;

    case "tipus":
        $FishingRodrest = new FishingRodrestKezelo();
        $FishingRodrest->getFRodByType($_GET["tid"]);
    
    default:
        $FishingRodrest = new FishingRodrestKezelo();
        $FishingRodrest->getFault();
        break;
    
}
?>