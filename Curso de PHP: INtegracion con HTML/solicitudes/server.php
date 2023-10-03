<?php

echo "<pre>";

// Si quiero verificar con post
// var_dump($_POST);
var_dump($_POST);

echo "</pre>";

$nombre = $_POST["name"];
$edad = $_POST["age"];

echo "El usuario $nombre tiene $edad anios. ";