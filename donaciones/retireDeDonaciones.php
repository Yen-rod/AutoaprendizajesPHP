<?php

$cantidad_donada = readline("Por favor, ingresa la cantidad 
de donaciones acumuladas que tienes : ");

if ( $cantidad_donada >=100)
{
    echo "Tu retiro está en proceso....";
}else
{
    echo "Lo sentimos, sólo puede retirar cantidades superiores
    o iguales a 100€";
}