<?php

$usuarios = ["Jose", "Alejandro", "Pantoja", "Giraldo"];

do {
    $user = readline("Cual es tu nombre de usuario ?");
    echo("$user \n");
} while (in_array($user, $usuarios));

