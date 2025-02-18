<?php
//beszúrás: 
require_once("restKezelo.php"); //http1.1 státuszkód elepján üzenetek
require_once("FishingRod.php"); //lekérdezéseink megfogalmazva SQL szinten fgv-ek osztályban

//Class inherited from RestKezelo
//The same as the restKezelo, but it contains the main Selet query types
class FishingRodrestKezelo extends RestKezelo
{
    function getAllFRod()
    {
        
        $fishingrod = new FishingRod();
        $sorAdat = $fishingrod->getAllFishingRods();
        if(empty($sorAdat))
        {
            $statusCode = 404;
            $sorAdat = array('error'=> 'No FishingRods found!');
        } else {
            $statusCode = 200;
        }

        $this ->sethttpFejlec($statusCode);
        $result["fishingRod"] = $sorAdat;

        $response = $this->encodeJson($result);
        echo $response;
    }

    function getFRodById($id)
    {
        $fishingrod= new FishingRod();
        $sorAdat=$fishingrod->getFishingRodById($id);
        if(empty($sorAdat))
        {
            $statusCode = 404;
            $sorAdat = array('error'=> 'No FishingRod by this id found!');
        } else {
            $statusCode = 200;
        }

        $this->sethttpFejlec($statusCode);
        $result["fishingRodById"] = $sorAdat;

        $response = $this->encodeJson($result);
        echo $response;
    }

    function getFRodByType($tid){
        $fishingrod = new FishingRod();
        $sorAdat = $fishingrod->getFishingRodByType($tid);
        if(empty($sorAdat)){
            $statusCode = 404;
            $sorAdat = array('error' => 'No FishingRod by this Manufacturer found!');
        } else {
            $statusCode = 200;
        }

        $this-> sethttpFejlec($statusCode);
        $result["fishingRodByManufacturer"] = $sorAdat;

        $respons = $this->encodeJson($result);
        echo $respons;
    }

        function getFault()
        {
            $statusCode = 400;
            $this->sethttpFejlec($statusCode);
            $sorAdat = array('error'=>'Bad Request!');
            $result["hiba"] = $sorAdat;

            $response = $this->encodeJson($result);
            echo $response;
        }

        function encodeJson($responseData)
        {
            $jsonResponse = json_encode($responseData);
            return $jsonResponse;
        }

    }

?>