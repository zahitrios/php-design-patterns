<?php

include_once ('Entity.php');
include_once ('EnemyFactory.php');
include_once ('Game.php');
include_once ('RandomEnemyFactory.php');
include_once ('Koopa.php');
include_once ('Goomba.php');
include_once ('KoopaFactory.php');


use Factory\Game;
use Factory\KoopaFactory;

//$factory = new RandomEnemyFactory();
$factory = new KoopaFactory();

$game = new Game($factory);
$game->gameLogic();
