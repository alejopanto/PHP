<?php

echo "<pre>";

var_dump($_GET);

echo "</pre>";

$nombre = $_GET["name"];
$edad = $_GET["age"];

echo "El usuario $nombre tiene $edad anios. ";