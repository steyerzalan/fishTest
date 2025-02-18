<?php
require_once("restKezelo.php");

//példányosítás
$restKezelo= new RestKezelo();

//200-as Ok teszt
echo "200-as teszt - OK-ra<br>";
echo $restKezelo->gethttpStatusUzenet(200) . "<br>";

//400-as Bad Request teszt
echo "400-as teszt -Bad Request-ra<br>";
echo $restKezelo->gethttpStatusUzenet(400) . "<br>";

//404-es Ok teszt
echo "404-es teszt - Not found-ra<br>";
echo $restKezelo->gethttpStatusUzenet(404) . "<br>";

//500-as Ok teszt
echo "500-as teszt - Internal Server-re<br>";
echo $restKezelo->gethttpStatusUzenet(500) . "<br>";

//Ismeretlen státuszkód
echo "Ismeretlen<br>";
echo $restKezelo->gethttpStatusUzenet(999) . "<br>";
