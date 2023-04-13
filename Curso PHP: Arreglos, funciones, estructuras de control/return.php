<?php

function freddy()
{
    $numero = rand(1, 4);
    switch ($numero) {
        case 1:
            return "jajajaj saludos";
            break;
        case 2:
            return "xD";
            break;
        case 3:
            return "Nose que escribir";
            break;
        case 4:
            return "El vacio de la existencia del alma";
            break;
    }
}

echo freddy();