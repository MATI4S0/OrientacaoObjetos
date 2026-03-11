<?php

//Funções
function area($base, $altura){
    return $base * $altura;
} 

function perimetro($base, $altura){
    return 2 * ($base + $altura);
}

for ($i = 0; $i < 3; $i++) {

$base = readline("\nDigite a base do retângulo: ");
$alture = readline("\nDigite a altura do retângulo: ");

$area = area($base, $alture);
$perimetro = perimetro($base, $alture);

echo "\nA área do retângulo é: " . $area;
echo "\nO perímetro do retângulo é: " . $perimetro;

}