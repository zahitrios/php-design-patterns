<?php

namespace Adapter;

class Service
{

    public function chargeBattery(Mobile $mobile): void{
        echo 'Your mobile is charging!!'.PHP_EOL;
        $mobile->chargeBattery();        
    }
}
