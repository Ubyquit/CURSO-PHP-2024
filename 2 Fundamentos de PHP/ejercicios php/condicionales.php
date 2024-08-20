<?php

/*
Escribir un programa que pida al usuario dos números y 
muestre por pantalla su división. Si el divisor es cero 
el programa debe mostrar un error.
*/

$numeroUno = 0;
$numeroDos = 10;

$division = $numeroUno/$numeroDos;

if($division == 0){
    echo "error al dividir";
}else{
    echo $division;
}
