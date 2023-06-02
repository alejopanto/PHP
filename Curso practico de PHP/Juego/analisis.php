<?php

print_r($_REQUEST);

$words = array("sol", "luna", "cielo", "cartulina");
echo "<br>";

for ($i=0; $i < count($words) ; $i++) { 
    if($_REQUEST["palabra".$i] == $words[$i]) {
        echo "La palabra ingresada es correcta", "<br>";
    } else {
        echo "La palabra ingresada no es correcta, la palabra correcta es: <strong>".$words[$i], "</strong><br>";
    } 
}

?>