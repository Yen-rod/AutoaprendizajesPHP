<?php

//funcion que nos ayude a limpiar la pantalla
function clear() 
{   //PHP_OS nos indica que SO mi programa se está ejecutando
    if(PHP_OS === "WINNT")
    {
        system("cls");
    }else{ //seguramente linux
        system("clear");
    }
}

$posible_words = ["Bebida", "Prisma", "Ala", "dolor", "piloto", 
"baldosa", "terremoto", "asteroide", "gallo", "platzi"];

//6 MAX intentos
define("MAX_ATTEMPS", 6);

echo "¡Juego del ahorcado! \n\n";

//inicializamos el juego
$choosen_word = $posible_words [rand(0,9)];
//quiero que todo este en minusculas
$choosen_word = strtolower($choosen_word);
//cuantos letras tiene la palabra elegido
$word_length = strlen($choosen_word);
//rellena de lo que yo le indique un string, en este caso _
$discovered_letters = str_pad("", $word_length, "_");

//cuantos intentos fallidos
$attempts = 0;


do{
    echo " Palabra de $word_lenght letras \n\n";
    echo $discovered_letters ."\n\n";

    //Pedimos al usuario que escriba 
    $player_letter = readline("escribe una legra : ");
    $player_letter = strtolower($player_letter);

    // str_contains indica que si esa letra existe
    if (str_contains($choosen_word, $player_letter))
    {
        //verificamos todas las ocurrencias de esta letra para reemplazarla
        // encuentra la posición de la primera ocurrencia
        $offset = 0; 
        while ( 
            ($letter_position = strpos($choosen_word, $player_letter,
        $offset)) !== false ) 
        {
            $discovered_letters[$letter_position] = $player_letter;
            //cambiamos el offset ya que hemos encontrado la primera letra 
            //pero puede haber más-. 
            $offset = $letter_position + 1 ; 
        }
    }else 
    {
        clear();
        echo " letra incorrecta. Te quedan ". (MAX_ATTEMPS- $attempts). 
        "intentos";
        //sleep permite pausar la ejecución en segundos
        sleep(2);
    }

    clear(); // para que cada vez se limpie la pantalla
}while($attempts<MAX_ATTEMPS && $discovered_letters!= $choosen_word);

//vez ganado limpiamos 
clear();
//ponemos un mensaje 
if ($attempts < MAX_ATTEMPS) {
    echo "Felicidades, has adivinado \n\n";
}else{
    echo "suerte para la próxima";
}

echo " la palabra es : $choosen_word \n";
echo " tu descubriste $discovered_letters";

echo "\n";

