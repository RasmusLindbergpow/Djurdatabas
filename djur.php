<?php

class Djur {
    protected $name;
    protected $sound;
    protected $age;
    function __construct($name, $sound, $age) {
        $this->name = $name;
        $this->sound = $sound;
        $this->age = $age;
    }

    function getDetails() {
        return "Namn: ".$this->name.", Ljud: ".$this->sound.", Ålder: ".$this->age;
    }
}

?>