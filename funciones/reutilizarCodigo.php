<?php

function get_pokemon()//devolverá pokemon de forma aleatoria
{
    //funcion predefinida rand - general nº aleatorio entre 1-5
    $numero_aleatorio = rand(1,5);

    switch ($numero_aleatorio)
    {
        case '1':
            echo "Pikachu";
            break;
        case '2':
            echo "Charmander";
            break;
        case '3':
            echo "Mewtwo";
            break;
        
        default:
            echo "Lo siento no hay pokemon";
    }
}

//llamamos a la funcion 
get_pokemon();

//resultado:
//Charmander
