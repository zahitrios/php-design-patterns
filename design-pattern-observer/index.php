<?php

require_once ('Observer.php');
require_once ('Observable.php');
require_once ('BankClient.php');
require_once ('BankAccount.php');

use ObseverPattern\BankAccount;
use ObseverPattern\BankClient;

$bankAccount = new BankAccount();
$bankClient = new BankClient($bankAccount); //now the observer can access to account functions
$bankAccount->attach($bankClient); //now the observable can notify when its status change

$bankAccount->makeDeposit(99.99);
$bankAccount->makeDeposit(999.99);