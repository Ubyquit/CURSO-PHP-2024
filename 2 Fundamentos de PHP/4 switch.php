<?php

$nota = 89;

switch ($nota) {
    case 100:
        echo "A+";
        break;
    case $nota >= 90:
        echo "A";
        break;
    case $nota >= 80:
        echo "B";
        break;
    default:
        echo "C";
        break;
}
