<?php

$possible_words = ["Platzi", "Tormenta", "Huracan", "Citas", "Contexto", "Videos", "Perro", "Gato"];

define("MAX_ATTENMPS", 6);

echo("Juego de ahorcado :) \n");

$chosse_word = $possible_words[ rand(0, 7) ];
$chosse_word = strtolower($chosse_word);
$word_length = strlen($chosse_word);
$discovered_letters = str_pad("", $word_length, "_");
$attemps = 0;

echo "Palabra de $word_length letras \n\n";
echo $discovered_letters . "\n\n";

$player_letter = strtolower( readline("Escribe una letra: ") );

function str_contains($haystack, $letter)
{
   $chars = str_split($haystack);
   foreach($chars as $char){
    if($char == $letter){
        return true;
    }
   }
   return false;
}

if ( str_contains($chosse_word, $player_letter) ) {
    $offset = 0;
    while( $letter_position = strpos($chosse_word, $player_letter, $offset) !== false ) {
        $discovered_letters[$letter_position] = $player_letter;
        $offset = $letter_position + 1;
    }
} else {
    $attemps++;
    echo "Letra incorrecta !, te quedan " . (MAX_ATTENMPS - $attemps) . " intentos.";
}

echo("\n");