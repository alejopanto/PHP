<?php

function eres_legend($puntos) 
{
    if ($puntos >= 100) {
        echo("Eres legend");
    } else {
        echo("ya casi compadre");
    }
}

$dato = (int) readline('Cuantos puntos tienes ? ');
eres_legend($dato);

echo("\n");