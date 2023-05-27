<?php

require_once ('SpaceInterface.php');
require_once ('Space.php');

use Composite\Space;

$hospital = new Space('St. Patricks Hospital');

//creating floors
$orthopedicsFloor = new Space('Orthopedics Floor');
$maternityFloor = new Space('Maternity Floor');
$cardiologyFloor = new Space('Cardiology Floor');
$hospital->pushChild($orthopedicsFloor);
$hospital->pushChild($maternityFloor);
$hospital->pushChild($cardiologyFloor);

//creating modules
$orthopedicModule1 = new Space('Orthopedic module 1');
$orthopedicModule2 = new Space('Orthopedic module 2');
$orthopedicsFloor->pushChild($orthopedicModule1);
$orthopedicsFloor->pushChild($orthopedicModule2);

$maternityModule1 = new Space('Maternity module 1');
$maternityModule2 = new Space('Maternity module 2');
$maternityFloor->pushChild($maternityModule1);
$maternityFloor->pushChild($maternityModule2);

$cardiologyModule1 = new Space('Cardiology module 1');
$cardiologyModule2 = new Space('Cardiology module 2');
$cardiologyFloor->pushChild($cardiologyModule1);
$cardiologyFloor->pushChild($cardiologyModule2);



$maternityFloor->setMaintenanceMode(true); //closing maternity floor

echo $hospital."\n"; // this should be open

echo $maternityFloor."\n"; 
echo $maternityModule1."\n"; // if patter works, modules will be closed
echo $maternityModule2."\n"; // if patter works, modules will be closed

echo $cardiologyFloor."\n"; // this should be open
echo $cardiologyModule1."\n"; // this should be open
echo $cardiologyModule2."\n"; // this should be open

echo $orthopedicsFloor."\n"; // this should be open
echo $orthopedicModule1."\n"; // this should be open
echo $orthopedicModule2."\n"; // this should be open