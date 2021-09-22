<?php

{
    //Asignacion de variables

    $numero = 9;
    $Lang = [
        'es' => 'español',
        'en' => 'ingles'
    ];
    

    //Operadores
    echo 'suma 2 + 2 = '. 2+2;
    echo 'resta 2 - 2 = '. 2-2;
    echo 'multiplicacion 2 * 2 = '. 2*2;
    echo 'division 2 / 2 = '. 2/2;
    echo 'modulo 2 % 2 = '. 2%2;
    echo 'exponencial 2 ** 2 = '. 2**2;

    //Comparación
    //variables variables

    $app = 'name';
    $name = 'platzi';

    echo $app; //name
    echo $$app; //platzi
}



