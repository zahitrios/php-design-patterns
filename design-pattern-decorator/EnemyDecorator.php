<?php

namespace Decorator;

class EnemyDecorator implements Enemy{

    public function __construct(private Enemy $decoratedEnemy)
    {
        
    }

    /**
     * The Decorator delegates all work to the wrapped component.
     */
    public function computeDamage(): int
    {
        return $this->decoratedEnemy->computeDamage();
    }

}