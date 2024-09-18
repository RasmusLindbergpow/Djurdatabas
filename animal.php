<?php

class Animal {
    protected $name;
    protected $sound;
    protected $age;
    protected $species;
    function __construct($name, $sound, $age, $species) {
        $this->name = $name;
        $this->sound = $sound;
        $this->age = $age;
        $this->species = $species;
    }

    function getDetails() {
        return "Namn: ".$this->name.", Ljud: ".$this->sound.", Ålder: ".$this->age.", Art: ".$this->species;
    }
}

?>