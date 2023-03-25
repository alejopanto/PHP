<?php

$edades = array(
    "Carlos" => 20,
    "Mr.Michi" => 18,
    "Juan" => 40,
);

echo("La edad de Juan es: {$edades['Juan']}");

$personas = array(
    "Alejandro" => array(
        "apellido" => "Pantoja",
        "edad" => 29,
    ),
    "Mr.Michi" => array(
        "apellido" => "Michinol",
        "edad" => 18,
    ),
);

echo("La edad de Mr.Michi es: {$personas['Mr.Michi']['edad']} y su apellido es: {$personas['Mr.Michi']['apellido']}");

echo("\n");