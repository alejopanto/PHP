<?php

function get_pokemon()
{
    $numero = rand(1, 5);
    switch ($numero) {
        case 1:
            echo("Squartul \n");
            break;
        case 2:
            echo("Bulbasor \n");
            break;
        case 3:
            echo("Charmander \n");
            break;
        case 4:
            echo("Pickachu \n");
            break;
        default:
            echo("Narajas \n");
            break;
    }
}

for ($i=0; $i < 10; $i++) { 
    get_pokemon();
}

echo("\n");