<?php

namespace Decorator;

class KoopaEnemy implements Enemy{

    public function computeDamage(): int
    {
        echo "Koopa Attacking!!".PHP_EOL;
        return 100;
    }

}