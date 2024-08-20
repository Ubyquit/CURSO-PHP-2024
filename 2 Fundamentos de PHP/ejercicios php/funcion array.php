<?php


$flores = array("Rosas","Tulipanes","Margaritas");

function flor($a){
    echo "La flor es: $a \n";
}

foreach($flores as $flor){
    flor($flor);
}