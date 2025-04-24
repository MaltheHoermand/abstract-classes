<?php
require_once "classes/Vehicle.php";
require_once "classes/Car.php";

$car = new Car();
$car->set_name("test name");

echo $car->get_name();