<?php

//Osztályról van itt is szó
class RestKezelo{

    private $httpVersion = "HTTP/1.1";

    //http fejléc beállítása státusztkód alapján
    //error kód 200-asok jó, 400 rossz lekérés, stb...
    public function sethttpFejlec($statusKod)
    {
        $statusUzenet = $this->gethttpStatusUzenet($statusKod);

        header($this-> httpVersion." ". $statusKod ." ". $statusUzenet);
        header("Content-Type: Application/json");
    } 

    //http üzenetkinyerés
    public function gethttpStatusUzenet($statusKod)
    {
        $httpStatus = array(
            200=> 'OK',
            400=> 'Bad Request',
            404=> 'Not Found',
            500=> 'Internal Server Error');
        return isset($httpStatus[$statusKod]) ? $httpStatus[$statusKod] : $httpStatus[500];
    }
}
?>