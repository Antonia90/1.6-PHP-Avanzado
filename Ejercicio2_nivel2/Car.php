<?php
require_once 'Turbo.php';

class Car
{
    use Turbo;
    public string $brand;
    public string $licensePlate;
    public string $fuelTypes;
    public int $maxSpeed;

    public function __construct(string $brand, string $licensePlate, string $fuelTypes, int $maxSpeed)
    {
        $this->brand = $brand;
        $this->licensePlate = $licensePlate;
        $this->fuelTypes = $fuelTypes;
        $this->maxSpeed = $maxSpeed;
    }

    public function __toString(): string
    {
        return "Marca: $this->brand <br>" .
            "Matrícula: $this->licensePlate <br>" .
            "Tipo de combustible: $this->fuelTypes <br>" .
            "Velocidad máxima: $this->maxSpeed <br>";
    }
}
