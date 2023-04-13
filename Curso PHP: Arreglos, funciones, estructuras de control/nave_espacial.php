<?php

$precios_de_cafes = [1, 23, 42, 2, 12, 67, 30];

usort($precios_de_cafes, function($a, $b){
    return $a <=> $b;
});

var_dump( $precios_de_cafes );