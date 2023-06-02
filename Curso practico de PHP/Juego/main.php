<?php

$words = array("sol", "luna", "cielo", "cartulina");

$form = "<form action='analisis.php'>";

for ($i=0; $i < count($words); $i++) { 
    $form .= "La palabra: " . str_shuffle($words[$i]) . 
    " <input type='text' name='palabra".$i."'> <br>";
}

$formButton = "<button type='submit'>Enviar</button> </form>";

echo $form . $formButton;

?>