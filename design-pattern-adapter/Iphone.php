<?php

namespace Adapater;

use Adapter\Mobile;

class Iphone implements Mobile{

    public function __construct(private int $batteryLevel)
    {
    }

    public function chargeBattery(): void{
        $this->batteryLevel = 100;
    }

    public function getBatteryLevel(): int{
        return $this->batteryLevel;
    }

}