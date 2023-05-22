<?php

require_once ('Battle.php');
require_once ('AttackStrategy.php');
require_once ('RainStrategy.php');
require_once ('SnowStrategy.php');
require_once ('NightStrategy.php');

use Strategy\AttackStrategy;
use Strategy\Battle;
use Strategy\RainStrategy;
use Strategy\SnowStrategy;
use Strategy\NightStrategy;

$battle = new Battle;
echo $battle->getState().PHP_EOL;

computeTurn($battle, new RainStrategy, new SnowStrategy);
computeTurn($battle, new SnowStrategy, new NightStrategy);

function computeTurn(Battle $battle, AttackStrategy $myAttack, AttackStrategy $foeAttack){
    $battle = $myAttack->executeAttack($battle);
    echo $battle->getState().PHP_EOL;
    $battle = $foeAttack->executeAttack($battle);
    echo $battle->getState().PHP_EOL;
}
