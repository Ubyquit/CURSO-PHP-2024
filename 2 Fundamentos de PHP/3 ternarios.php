<?php
$chetos = 100;
$efectivo = 100;

$estatus = ($efectivo >= $chetos)
    ? "Puedes comprar los chetos"
    : "No puedes comprar los chetos";

echo $estatus;