<?php

$michi = array(
    "nombre" => "Muchi 1",
    "ocupacion" => "Dormir",
    "color" => "negro",
    "comidas" => array(
        "favoritas" => array('pollo', 'carne', 'pescado'),
        "no_favoritas" => array('verduras', 'pepas', 'pan')
    )
);

echo($michi["comidas"]["favoritas"][1]);

echo("\n");