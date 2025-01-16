<?php
//si no le pasamos el parametro, por defecto valdrá 1
// function suma($a = 1, $b) {
//     echo "La suma de $a + $b es: " .$a+$b ."\n";
// }

// suma (2,2);
// echo "\n";

// $arreglo1 = [ 1, 2, 3 ];
// $arreglo2 = [ 4, 5, 6 ];

// //une los arreglos
// $resultado = [...$arreglo1, ...$arreglo2];

// var_dump($resultado);
// //veremos todo en un solo arreglo.

///////////////////////////////////////////////////
// function suma($a, $b) 
// {
//     echo "La suma de $a + $b es: " .$a+$b ."\n";
// }

// $numeros = [ 1, 2];
// // asignaré el 1 a la $a y 2 al $ b 
// //array and paquing
// suma(...$numeros);
////////////////////////////////////////////
//suma infinita, todo lo que el usuario pase.
//...$params transforma en array lo que se meta
//suma_infinita(100,2,2,2,3,8)
function suma_infinita(...$params) 
{
    $suma = 0 ; 

    foreach ($params as $numero) 
    {
        $suma += $numero;
    }

    echo " La sumatoria es : $suma \n";
}

// resultado 
// suma_infinita(1,2); 
// La sumatoria es : 3 
