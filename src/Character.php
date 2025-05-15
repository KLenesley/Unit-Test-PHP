<?php

namespace App;

class Character {
    public $name;
    public $health;
    public $strength;

    public function __construct($name, $health, $strength) {
        $this->name = $name;
        $this->health = $health;
        $this->strength = $strength;
    }
}

?>