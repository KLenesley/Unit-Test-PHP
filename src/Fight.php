<?php

namespace App;

use App\Character;

class Fight {
    public $character1;
    public $character2;

    public function __construct(Character $character1, Character $character2) {
        $this->character1 = $character1;
        $this->character2 = $character2;
    }

    public function start() {
        if ($this->character1->strength > $this->character2->strength) {
            return $this->character1;
        } else if ($this->character1->strength < $this->character2->strength) {
            return $this->character2;
        } else {
            return null; // Il n'y a pas de vainqueur, donc on renvoie null
        }
    }
}

?>