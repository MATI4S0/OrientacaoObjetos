<?php

function somar($n1, $n2 = 100){

    $somar = $n1 + $n2;
    
    return $somar;
}

//Código Principal
$n1 = readline("Informe o 1° valor: ");


//Capturando a variavel
$somar = somar($n1);
echo $somar . "\n";


//Imprimindo direto o resultado
echo somar($n1) . "\n";

echo "Fim do Código";