<?php

function existe($vetor, $elem)
{
    foreach ($vetor as $n2) {
        if ($elem == $n2) {
            $existe = true;
            return true;
        }
    }
    return false;

}

//Programa Principal

$A = [];
$B = [];
$C = [];
$D = [];


//Vetor A

echo "\n---Informe os Elementos de A: \n";
for ($i = 1; $i <= 5; $i++) {
    $num = readline("Informe um número: ");
    array_push($A, $num);
}

//Vetor B

echo "\n---Informe os Elementos de B: \n";
for ($i = 1; $i <= 5; $i++) {
    $num = readline("Informe um número: ");
    array_push($B, $num);
}


//Intersecção Dos Vetores A e B

foreach ($A as $n) {
    //Verificar se $n existe no conjunto B
    $existe = existe($B, $n);
        array_push($C, $n);
}

//Imprimir vetor C - intersecção
echo "\n---Intersecção de A e B---\n";
foreach ($C as $n) {
    echo $n . "\n";
}


//União dos vetores A e B
$D = $A;
foreach ($B as $n) {

    if (existe($D, $n) == false) {
        array_push($D, $n);
    }
    
}

//Imprimir vetor D - união
echo "\n---União de A e B---\n";
foreach($D as $n){
    echo $n . "\n";
}


//DEU ERRADO