<?php
class Animal
{
    private string $name;
    private int $age;
    function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function __get($prop)
    {
        if ($prop === "name") {
            return $this->name;
        }
        if ($prop === "age") {
            return $this->age;
        }
        return "Propiedad '$prop' no existe o no es accesible.";
    }
}

