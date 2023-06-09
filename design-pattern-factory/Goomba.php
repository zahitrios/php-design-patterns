<?php

namespace Factory;

class Goomba implements Entity{

    const DAMAGE = 5;

    public function attack(): void{
        echo "I'm a Goomba, attacking with power: ".self::DAMAGE."!!\n";
    }

}