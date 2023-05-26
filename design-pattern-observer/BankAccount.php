<?php

namespace ObseverPattern;

use ObseverPattern\Observable;

class BankAccount implements Observable{

    private Observer $bankClient;
    private float $balance=0;

    public function attach(Observer $observer): void{
        $this->bankClient = $observer;
    }

    public function detach(Observer $observer): void{
        $this->bankClient = null;
    }

    public function notify(): void{
        $this->bankClient->update();
    }

    public function makeDeposit(float $money){
        $this->balance += $money;
        echo "Balance updated!!\n";
        $this->notify();
    }

    public function getBalance(): float{
        return $this->balance;
    }
}