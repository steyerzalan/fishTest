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
    echo "Az adatbázis apcsolat sikeres <br>";
}
else
{
    echo "Az adatbázis apcsolat sikerTELEN <br>";
}
