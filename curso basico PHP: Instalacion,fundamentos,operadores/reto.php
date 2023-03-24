<?php

$hora = readline("Dame la hora (Maximo 12): ");
while ($hora > 12) {
    $hora = readline("Dame la hora (Maximo 12): ");
}

$minutos = readline("Dame los minutos (Maximo 59): ");
while ($minutos > 59) {
    $hora = readline("Dame los minutos (Maximo 59): ");
}

$segundos = readline("Dame los segundos (Maximo 59): ");
while ($hora > 59) {
    $hora = readline("Dame los segundos (Maximo 59): ");
}

$hora_segundos = 3600 * $hora;
$minutos_segundos = 60 * $minutos;

$segundos_totales = ($hora_segundos + $minutos_segundos + $segundos);

echo("Tu hora en segundos es $hora_segundos - Tus minutos en segundos son $minutos_segundos - Tus segundos son  $segundos. En total llevas $segundos_totales de segundos"); 

echo("\n");