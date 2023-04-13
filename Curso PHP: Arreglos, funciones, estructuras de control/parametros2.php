<?php

function suma($a = 1, $b = 1)
{
    echo"La suma de $a + $b es igual a " . $a + $b . "\n";
}

//suma(1, 8);

$arreglo1 = [1, 2, 3];
$arreglo2 = [4, 5, 6];

$resultado = [...$arreglo1, ...$arreglo2];

//var_dump($resultado);


function suma_infinita(...$params)
{
    var_dump($params);
    // ...$params lo vulve un array
}

suma_infinita(1, 2, 3, 4, 12, 23, 34);

echo("\n");