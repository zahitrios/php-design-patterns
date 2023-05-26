<?php

namespace Factory;

class GoombaFactory implements EnemyFactory{

    public function createEnemy(): Entity{
        return new Goomba;
    }
}