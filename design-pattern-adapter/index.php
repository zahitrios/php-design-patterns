<?php

require_once('Mobile.php');
require_once('Service.php');
require_once('Iphone.php');
require_once('WeirdMobile.php');
require_once('WeirdMobileAdapter.php');

use Adapater\Iphone;
use Adapater\WeirdMobile;
use Adapater\WeirdMobileAdapter;
use Adapter\Service;

$chargingService = new Service;

$iPhone = new Iphone(50); // setting initial battery to 50%

echo 'iPhone battery level: '.$iPhone->getBatteryLevel().PHP_EOL;
$chargingService->chargeBattery($iPhone);
echo 'iPhone battery level: '.$iPhone->getBatteryLevel().PHP_EOL;

echo PHP_EOL;

$weirdPhone = new WeirdMobile([50,40,20],'crazy feature 1','creazy feature 2'); // setting initial set up of the werid phone
$weirdMobileAdapter = new WeirdMobileAdapter($weirdPhone);
echo 'weird phone battery level: '.$weirdMobileAdapter->getBatteryLevel().PHP_EOL;
$chargingService->chargeBattery($weirdMobileAdapter);
echo 'weird phone battery level: '.$weirdMobileAdapter->getBatteryLevel().PHP_EOL;
