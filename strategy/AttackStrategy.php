<?php

namespace Strategy;

interface AttackStrategy{

    public function executeAttack(Battle $battle) :Battle;

}