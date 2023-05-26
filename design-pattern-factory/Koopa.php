<?php

namespace Factory;

class Koopa implements Entity{

    const DAMAGE = 10;

    public function attack(): void{
        echo "atacando con poder ".self::DAMAGE."!!\n";
    }

}