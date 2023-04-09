<?php

// 2 = 1
// 3 = 2
// 4 = 3
// 5 = 5
// 6 = 8
// 7 = 13
// 8 = 21

$tienda = (int) readline("Dime que tienda quieres buscar: ");
$anterior = 0;
$actual = 1;

for ($i=2; $i <= $tienda ; $i++) { 
    $temporal = $actual;
    $actual += $anterior;
    $anterior = $temporal;
}

echo("Tienes $actual formas de llegar a la tienda");

echo("\n");