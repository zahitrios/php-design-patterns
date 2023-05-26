<?php

namespace ObseverPattern;

use ObseverPattern\Observer;

class BankClient implements Observer{
    
    public function __construct(private Observable $bankAccount)
    {
        
    }

    public function update(): void{
        echo 'Notification: your new balance is: '.$this->bankAccount->getBalance()."\n";
    }
}
