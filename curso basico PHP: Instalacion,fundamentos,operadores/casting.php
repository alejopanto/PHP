<?php

$numero = "5";
var_dump($numero);

$numero = (int) $numero;
var_dump($numero);

$dias = 7.89;
$dias = (int) $dias; #No redondea
var_dump($dias);

$bandera = 0;
$bandera = (bool) $bandera;
var_dump($bandera);

echo "\n";