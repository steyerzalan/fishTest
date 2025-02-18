<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once ("dbcontroller.php");

//példányosítás az osztályból
$db=new DBController();
//teszt kapcsolat (connection)
if ($db->connectDB())
{
    echo "Az adatbázis kapcsolat sikeres <br>";
}
else
{
    echo "Az adatbázis apcsolat sikerTELEN <br>";
}
//Teszt Select query
$query="SELECT * FROM fishingrod";
$eredmeny=$db->executeSelectQuery($query);

if($eredmeny !== "hiba")
{
    echo "Lekérdezés sieres! <br>";
    echo "<pre>";
    print_r($eredmeny);
    echo "</pre>";
}
else
{
    print_r($eredmeny);
    echo "Lekérdezés hiba <br>";
}

$db->closeDB();
echo "Lezárva";