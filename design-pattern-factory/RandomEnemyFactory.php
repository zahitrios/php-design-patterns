<?php

namespace Factory;

class RandomEnemyFactory implements EnemyFactory{
    public function createEnemy(): Entity{
        if(rand(1,10) % 2 == 0)
            return new Goomba;
        else
            return new Koopa;
    }
}
