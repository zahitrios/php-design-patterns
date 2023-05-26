<?php

namespace Factory;

class KoopaFactory implements EnemyFactory{

    public function createEnemy(): Entity{
        return new Koopa;
    }
}