<?php

function f($x){
    $y = (5 * $x) + (2 * $x) + 3;
    return $y;
}

//Código Principal

$count = 5;

do {
    $y = readline ("Informe um parametro para fazer a FUNÇÃO: f(x) 5x + 2x + 3 \n");
    $valorY = f($y);
    echo ("O resultado é: " . $valorY . "\n");
    $count --;
} while ($count != 0);