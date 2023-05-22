<?php

namespace Factory;

class Goomba implements Entity{

    const DAMAGE = 5;

    public function attack(): void{
        echo "atacando con poder ".self::DAMAGE."!!";
    }

}