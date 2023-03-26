<?php

$edades = [10, 20, 30];

#Count
//echo(count($edades));

#array_push
array_push($edades, 15);

#is_array
$arreglo = "";

#explode
$frutas = "Pera, Manzana, Zandia";
$frutas_array = explode(",", $frutas); #indicar separador

#impode
$frutas_array = ["Pera", "Manzana", "Zandia"];
$frutas_string = implode("-", $frutas_array); #indicar concatenador
var_dump( $frutas_string );

echo("\n");