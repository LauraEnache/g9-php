<?php

require_once "Audi.php";
require_once "Peugeot.php";

$audi = new Audi("RS Q8", "LightGray");
$bmw = new Peugeot(name:"507", color:"Black");

$audi->setspeed(20);
$bmw->setspeed(speed:20);

echo $audi;
echo '<br>';
echo $bmw;
echo '<br>';
echo Car::SPEED_FOR_PEUGEOT;