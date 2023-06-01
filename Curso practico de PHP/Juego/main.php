<?php

$palabras = array("sol", "luna", "cielo");

$form = "<form action='analisis.php'>";

for ($i=0; $i < count($palabras); $i++) { 
    $form .= "La palabra: " . str_shuffle($palabras[$i]) . 
    " <input type='text' name='palabra".[i]."'> <br>";
}

$formButtonCierre = "<button type='submit'>Enviar</button> </form>";

echo $form . $formButtonCierre;

?>