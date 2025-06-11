<?php

require_once 'Car.php';


$car = new Car("Toyota", "ABC123", "Gasolina", 180);

echo $car;
$car->boost();
