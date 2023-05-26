<?php

namespace Strategy;

class SnowStrategy implements AttackStrategy{
    
    public function executeAttack(Battle $battle) :Battle{
        //more logic or code to modife the battle
        $battle->setState("Snowing");
        return $battle;
    }
}