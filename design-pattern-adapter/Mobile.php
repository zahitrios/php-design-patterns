<?php

namespace Adapter;

interface Mobile{
    public function chargeBattery(): void;
    public function getBatteryLevel(): int;
}
