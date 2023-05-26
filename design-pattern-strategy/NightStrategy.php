<?php

namespace Strategy;

class NightStrategy implements AttackStrategy{
    
    public function executeAttack(Battle $battle) :Battle{
        //more logic or code to modife the battle
        $battle->setState("Sky is dark");
        return $battle;
    }
}