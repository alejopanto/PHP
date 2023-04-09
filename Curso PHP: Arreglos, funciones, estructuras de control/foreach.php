<?php

$cafes = array(
    "Americano" => 20,
    "Latte" => 25, 
    "Recalentado" => 10,
    "Capuccino" => 27,5,
    "Mocca" => 24
);

foreach ($cafes as $key => $cafe) {
    echo("El cafe $key cuesta $$cafe USD \n");

    //Use continue
    if($key == "Recalentado")
        continue;

    echo("El cafe $key es muy rico \n");

    //Use break
    if ($key == "Latte") {
        echo("Encontramos a $key \n");
        break;
    }
}

echo("\n");