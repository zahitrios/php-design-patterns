<?php

namespace Adapater;

use Adapter\Mobile;

class WeirdMobileAdapter implements Mobile{

    private array $batteries;

    public function __construct(private WeirdMobile $weirdMobile){
        $this->batteries = $this->weirdMobile->getBatteries();
    }

    public function chargeBattery(): void{ // this is the adapter
        foreach($this->weirdMobile->getBatteries() as $index => $battery){
            $this->weirdMobile->chargeSpecificBattery($index);
        }
        $this->batteries = $this->weirdMobile->getBatteries(); // this is necessary to update the batteries attribute for the adapter
    }

    public function getBatteryLevel(): int{
        return (int)array_sum($this->batteries)/count($this->batteries);
    }
}