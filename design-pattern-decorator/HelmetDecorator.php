<?php

namespace Decorator;

class HelmetDecorator extends EnemyDecorator{

    public function computeDamage(): int
    {
        echo "Enemy with helmet doesn't has enhance attack".PHP_EOL;
        return parent::computeDamage();
    }

}
