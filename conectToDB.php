<?php
require_once __DIR__ . "/vendor/autoload.php";
$carsCollection = (new MongoDB\Client)->rent->cars;
$car_rentCollection = (new MongoDB\Client)->rent->car_rent;
?>