<?php
require_once("animal.php");

class Dog extends Animal{
    
    function __construct($name, $sound, $age, $species){
        parent::__construct($name, $sound, $age, $species);
    }

    function getDetails() {
        return "Namn: ".$this->name.", Ljud: ".$this->sound.", Ålder: ".$this->age.", Art: ".$this->species.". Hundar får inte äta choklad";
    }
}

?>