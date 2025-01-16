<?php

function es_estudiante_legend($platzi_rank) 
{
    if ($platzi_rank >=20000) 
    {
        echo "Eres legend";
    }else 
    {
        echo "No eres legend";
    }
}

//haremos que se repita para varios usuarios continuamente
do {
    $platzi_rank_user= (int) readline("Dinos tu numero de Platzi");
    es_estudiante_legend($platzi_rank_user);
} while (true);


