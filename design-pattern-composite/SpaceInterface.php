<?php

namespace Composite;

interface SpaceInterface{
    public function setMaintenanceMode(bool $mode): void;
    public function getMaintenanceMode(): bool;
}