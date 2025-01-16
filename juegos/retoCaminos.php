<?php
//https://platzi.com/new-home/clases/2794-php-arreglos-funciones/46564-reto-cuantas-caminos-hay-para-llegar-al-mismo-punt/
// 2 -> 1
// 3->2
// 4->3
// 5->5
// 6->8
// 7->13
// 8->21

$numero_de_tienda = (int) readline("dime el numero de tienda") ; 
//indica cuantas tiendas hubo para llegar a la actual
$anterior = 0; 
//cuantas formas hubo de llegar a la actual
$actual = 1; 

//si quisiera llegar a la tienda 8
for ($i=2; $i <=$numero_de_tienda; $i++) 
{ 
    $temporal = $actual;
    $actual +=$anterior;
    $anterior = $temporal; 
}

echo "HAY $actual formas distintas de llegar ";

// resultado: poniendo 8
//Hay 21 formas distintas de llegar