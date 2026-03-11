<?php

function areaCirculo($raio, $pi = 3.14){

    $multRaios = $raio * $raio;
    $areaTotal = $pi * $multRaios;

    return $areaTotal;

}

function circunferenciaCirculo($raio, $pi = 3.14){

    $valorCircurenferencia = 2 * $pi * $raio;

    return $valorCircurenferencia;

}

//Código Principal
$raio1 = readline("Informe o valor do raio do 1° Circulo: ");
$area1 = areaCirculo($raio1);
echo "A área deste circulo é: " . $area1 . "\n";
$circunferencia1 = circunferenciaCirculo($raio1);
echo "A circunferencia deste circulo é: " . $circunferencia1 . "\n\n";

$raio2 = readline("Informe o valor do raio do 2° Circulo: ");
$area2 = areaCirculo($raio2);
echo "A área deste circulo é: " . $area2 . "\n";
$circunferencia2 = circunferenciaCirculo($raio2);
echo "A circunferencia deste circulo é: " . $circunferencia2 . "\n\n";

$raio3 = readline("Informe o valor do raio do 3° Circulo: ");
$area3 = areaCirculo($raio3);
echo "A área deste circulo é: " . $area3 . "\n";
$circunferencia3 = circunferenciaCirculo($raio3);
echo "A circunferencia deste circulo é: " . $circunferencia3 . "\n\n";