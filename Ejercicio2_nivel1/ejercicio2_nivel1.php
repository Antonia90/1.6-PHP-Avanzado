<?php

function currentInfo(): void
{
    echo "La función se llama: " . __FUNCTION__ . "<br>";
    echo "Estás en el directorio: " .  __DIR__ . "<br>";
    echo "Esta es la línea: " . __LINE__;
}



currentInfo();
