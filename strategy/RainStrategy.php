<?php

namespace Strategy;

class RainStrategy implements AttackStrategy{
    
    public function executeAttack(Battle $battle) :Battle{
        //more logic or code to modife the battle
        $battle->setState("Raining");
        return $battle;
    }
}