<?php

require_once ('Singleton.php');

use Singleton\Singleton;

$obj1 = Singleton::getInstance();
$obj2 = Singleton::getInstance();
$obj3 = Singleton::getInstance();

if($obj1 === $obj2 && $obj2 === $obj3){
    echo "Singleton pattern works!!\n";
}
else{
    echo "NOPE!";
}