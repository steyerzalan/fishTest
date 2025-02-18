<?php
//adatbázis kapcsolat, ehhez egy osztály létrehozása
class DBController {
    private $conn = null;

    private $host = "localhost";

    private $user = "root";

    private $password = "";

    private $database = "pecabot";
    //konstruktor: csatlakozás létrehozása
    function __construct()
    {
        $conn = $this->connectDB();
        if(!empty($conn))
        {
            $this->conn = $conn;
        }
    }
    //maga csatlakozás
    function connectDB()
    {
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $conn;
    }
    //lekérdezésmetódus
    function executeSelectQuery($query)
    {
        $result = mysqli_query($this->conn,$query);
        while($row=mysqli_fetch_assoc($result))
        {
            $resultset[] = $row;
        }
        if(!empty($resultset))
        {
            return $resultset;
        }
    }
    //adatbázis csatlakozás lezárás
    function closeDB()
    {
        if(!empty($this->conn))
        {
            mysqli_close($this->conn);
            $this->conn = "";
        }
    }
}

?>