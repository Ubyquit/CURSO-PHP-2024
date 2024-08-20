<?php

$variableUno = 10;

for ($i = 0; $i <= $variableUno; $i++){
    echo "Iteracion $i \n";
    $variableDos = $i; 
}

$variableUno = $variableDos;

while ($variableUno >= 1){
    echo "iteracion inversa $variableUno \n";
    $variableUno--;
}