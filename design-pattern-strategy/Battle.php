<?php

namespace Strategy;

class Battle{

    public function __construct(private $state = 'Sunny')
    {        
    }

    public function setState(string $state){
        $this->state = $state;
    }

    public function getState(){
        return $this->state;
    }
}
