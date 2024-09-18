<?php
require_once("animal.php");

class Cat extends Animal{
    
    function __construct($name, $sound, $age, $species){
        parent::__construct($name, $sound, $age, $species);
    }

    function getDetails() {
        return "Namn: ".$this->name.", Ljud: ".$this->sound.", Ålder: ".$this->age.", Art: ".$this->species.". Lever katten i lådan?";
    }
}

?>