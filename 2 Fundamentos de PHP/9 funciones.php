<?php

// !Funciones -> modular y reutilizar el codigo.

// funcion sin parametros
function saludar()
{
    echo "Hola mundo \n";
}

saludar();
saludar();
saludar();

// funcion con parametros
function saludar2($nombre)
{
    echo "Hola $nombre \n";
}

saludar2("Luis");
saludar2("David");
saludar2("Antonio");