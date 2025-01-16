<?php

function freddy()
{
    $numero_aleatorio = rand (1,4);
    $frase_de_fredy = "";
    switch($numero_aleatorio)
    {
        case '1':
            $frase_de_fredy = "nunca pares de aprender";
            break;
        case '2':
            $frase_de_fredy = " las empresas no son familia";
            break;
        case '3':
            $frase_de_fredy = " la tecnología es el futuro";
            break;
        case '4':
            $frase_de_fredy = "amo PHP";
            break;
    }
    return $frase_de_fredy;
}

echo freddy();
echo "\n";

// resultado 
// nunca pares de aprender... un numero al azar entre 1 y 4. 