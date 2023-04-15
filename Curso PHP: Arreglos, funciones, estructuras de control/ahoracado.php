<?php

function clear()
{
    if (PHP_OS == "WINNT") {
        system("cls");
    }else {
        system("clear");
    }
}

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

$possible_words = ["Platzi", "Tormenta", "Huracan", "Citas", "Contexto", "Videos", "Perro", "Gato"];

define("MAX_ATTENMPS", 6);

echo("Juego de ahorcado :) \n");

$chosse_word = $possible_words[ rand(0, 7) ];
$chosse_word = strtolower($chosse_word);
$word_length = strlen($chosse_word);
$discovered_letters = str_pad("", $word_length, "_");
$attemps = 0;

do {
    echo "Palabra de $word_length letras \n\n";
    echo $discovered_letters . "\n\n";

    $player_letter = strtolower( readline("Escribe una letra: ") );

    if ( str_contains($chosse_word, $player_letter) ) {
        $offset = 0;
        while( 
            ($letter_position = strpos($chosse_word, $player_letter, $offset)) !== false    
        ) {
            $discovered_letters[$letter_position] = $player_letter;
            $offset = $letter_position + 1;
        }
    } else {
        clear();
        $attemps++;
        echo "Letra incorrecta !, te quedan " . (MAX_ATTENMPS - $attemps) . " intentos.";
        sleep(2);
    }

    clear();
} while ($attemps < MAX_ATTENMPS && $discovered_letters != $chosse_word);

clear();

if ($attemps < MAX_ATTENMPS) {
    echo "Felicidades adivinaste \n\n";
} else {
    echo "Suerte para la proxima \n\n";
}

echo "La parabra es: $chosse_word \n\n";
echo "Tu pusiste: $discovered_letters \n\n";

echo("\n");