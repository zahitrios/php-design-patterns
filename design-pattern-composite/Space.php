<?php

namespace Composite;

class Space implements SpaceInterface{

    private array $children = [];
    private $maintenanceMode = false;

    public function __construct(private string $name)
    {       
    }
    
    public function pushChild(SpaceInterface $child){
        array_push($this->children, $child);
    }

    public function removeChild(SpaceInterface $child){
        //TODO, remove child from children
    }

    public function getMaintenanceMode(): bool{
        return $this->maintenanceMode;
    }

    public function setMaintenanceMode(bool $mode): void{
        $this->maintenanceMode = $mode;
        foreach($this->children as $child)
            $child->setMaintenanceMode($mode);
    }

    public function __toString()
    {
        return ($this->maintenanceMode) ? $this->name.' | Is closed' : $this->name.' | Is open';
    }
}