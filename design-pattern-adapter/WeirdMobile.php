<?php

namespace Adapater;

class WeirdMobile{

    public function __construct(
        private array $batteries,
        private string $crazyFeature1,
        private string $crazyFeature2
    )
    {
    }

    public function getBatteries(): array{
        return $this->batteries;
    }

    public function chargeSpecificBattery(int $indexBattery): void{
        $this->batteries[$indexBattery] = 100;
    }

    public function chargeBatteries(){

    }

}
