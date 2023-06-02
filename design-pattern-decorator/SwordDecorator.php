<?php

namespace Decorator;

class SwordDecorator extends EnemyDecorator{

    public function computeDamage(): int
    {
        echo "Enemy with sword attacking!!".PHP_EOL;
        return 200;
    }

}
