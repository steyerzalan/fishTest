<?php
require_once("dbcontroller.php");

//Ezintén osztály
class FishingRod {
    
    //változó array
    private $fishingrods = []; 

    //konstrutor által $fishingrod feltöltve az összes pecabottal
    public function __construct() {
        $query = "SELECT fr_ID, name FROM fishingrod";
		$dbvez = new DBController();
		$this->fishingrods = $dbvez->executeSelectQuery($query);
		$dbvez->closeDB();
    }
    
    //methódus lekérdezi $fishingrods (fel van töltve a konstruktor által)
    public function getAllFishingRods(){
        return $this->fishingrods;
    }
		
    //id alapján való lekérdezés
	public function getFishingRodById($RodsId): array {
		$query = "SELECT fr_ID, name  FROM fishingRod WHERE fr_ID = ".$RodsId;
		$dbvez = new DBController();
		$this->fishingrods = $dbvez->executeSelectQuery($query);
		$dbvez->closeDB();
		return $this->fishingrods;
    }
    
    //Típus alapján történő lekérdezés
    public function getFishingRodByType($TypeId) {
		$query = "SELECT fr_ID, name FROM fishingrod 
		inner join type on fishingrod.type_ID=type.t_id 
		where type.m_name= '".$TypeId. "'";
		$dbvez = new DBController();
		$this->fishingrods = $dbvez->executeSelectQuery($query);
		$dbvez->closeDB();
		return $this->fishingrods;
	
	}

}


?>