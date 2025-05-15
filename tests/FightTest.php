<?php

use App\Character;
use App\Fight;
use PHPUnit\Framework\TestCase;

class FightTest extends TestCase{

    public function testConstructor(){
        $character1 = new Character("Warrior", 100, 20);
        $character2 = new Character("Monster", 80, 15);
        $fight = new Fight($character1, $character2);

        $this->assertSame($character1, $fight->character1);
        $this->assertSame($character2, $fight->character2);
    }

    public function testStart(){
        $character1 = new Character("Simon", 100, 20);
        $character2 = new Character("Peter", 80, 15);
        $fight = new Fight($character1, $character2);

        $winner = $fight->start();

        $this->assertSame($character1, $winner);
    }

}

?>