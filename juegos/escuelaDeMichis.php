<?php

$escuela = array(

    //se puede hacer así tambien
    // "michi1" => array (
    // )

    array (
        "Nombre" => "Michijose",
        "ocupacion" => "Developer increible",
        "Color" => "Naranja con rayitas",
        "Comidas" => array (
            "Favoritas" =>"Lasaña, Atun",
            "NoFavoritas" => "Fresas, Cacahuetes"
        )    
    ), 
    array (    
        "Nombre" => "Michisancio",
        "ocupacion" => "Developer increible",
        "Color" => "Naranja con rayitas",
        "Comidas" => array (
            "Favoritas" =>"Lasaña, Atun",
            "NoFavoritas" => "Fresas, Cacahuetes"
        )   
    ), 
    array (
        "Nombre" => "Michiton",
        "ocupacion" => "Developer increible",
        "Color" => "Naranja con rayitas",
        "Comidas" => array (
            "Favoritas" =>"Lasaña, Atun",
            "NoFavoritas" => "Fresas, Cacahuetes"
        )   
    ),

);

$michisancio = $escuela[1];

echo "Las comidas favoritas de Michisancio son"
.$michisancio['Comidas']['Favoritas'];
// resultado "las com..... Lasaña, Atun