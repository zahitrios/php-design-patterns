<?php


require_once("Enemy.php");
require_once("EnemyDecorator.php");
require_once("KoopaEnemy.php");
require_once("SwordDecorator.php");
require_once("HelmetDecorator.php");

use Decorator\Enemy;
use Decorator\HelmetDecorator;
use Decorator\KoopaEnemy;
use Decorator\SwordDecorator;

$koopa = new KoopaEnemy;
executeAttack($koopa);

$koopaWithHelmet = new HelmetDecorator($koopa);
executeAttack($koopaWithHelmet);

$koopaWithSword = new SwordDecorator($koopa);
executeAttack($koopaWithSword);

$koopaWithHelmetAndSword = new SwordDecorator($koopaWithHelmet);
executeAttack($koopaWithHelmetAndSword);

function executeAttack(Enemy $enemy){
    echo $enemy->computeDamage().PHP_EOL.PHP_EOL;
}
