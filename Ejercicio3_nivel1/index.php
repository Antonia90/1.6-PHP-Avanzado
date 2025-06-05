<?php

include_once 'Animal.php';
$animal = new Animal("Pipo", 2);
$animal2 = new Animal("Michi", 6);

echo $animal->name . " tiene " . $animal->age . " años.<br>";
echo $animal2->name . " tiene " . $animal2->age . " años.<br>";
