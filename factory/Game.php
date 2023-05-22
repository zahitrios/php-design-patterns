<?php

namespace Factory;

use Factory\EnemyFactory;


class Game {

    public function __construct(private EnemyFactory $enemyFactory)
    {
        
    }

    public function gameLogic(){
        for($i=0;$i<=10;$i++){
            $enemy = $this->enemyFactory->createEnemy();
            $enemy->attack();
        }
    }

}