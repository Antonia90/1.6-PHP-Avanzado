<?php
require_once __DIR__ . '/vendor/autoload.php';

use Respect\Validation\Validator as v;

$number = 50;
$validator = v::number()->between(0, 100);

if ($validator->validate($number)) {
    echo "Número válido";
} else {
    echo "Número inválido";
}