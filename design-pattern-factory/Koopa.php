<?php

namespace Factory;

class Koopa implements Entity{

    const DAMAGE = 10;

    public function attack(): void{
        echo "I'm a Koppa, attacking with damage: ".self::DAMAGE."!!\n";
    }

}