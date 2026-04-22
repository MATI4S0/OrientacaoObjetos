<?php

function celcius_pra_fahrenheit($celcius)
{
    return $celcius * 1.8 + 32;
}

function fatorial($n)
{
    $fatorial = 1;
    for ($i = $n; $i > 0; $i--) {
        $fatorial *= $i;
    }
    return $fatorial;
}

function functiom($x)
{
    return ($x*$x + 2 * $x + 4) / 2 * $x;
}


//PROGRAMA PRINCIPAL


//1- Ler os 5 elementos do vetor
$everyone = [];

for ($i=0; $i < 5; $i++) { 
    $valores = readline("Informe algum número: ");
    array_push($everyone, $valores);
}
//2- Criar vetor 1 aplicando a fórmula (C para F)
$vetor1 = [];

foreach($everyone as $todos){
    $convertor =  celcius_pra_fahrenheit($todos);
    array_push($vetor1, $convertor);

}

//3- Criar vetor 2 calculando o fatorial 
$vetor2 = [];

foreach ($everyone as $n){
    $fator = fatorial($n);
    array_push($vetor2, $fator);

}

//4- Criar vetor 3 calculando o f(x)
$vetor3 = [];

foreach($everyone as $x){
    $funcam = functiom($x);
    array_push($vetor3, $funcam);

}

//5- Imprimir os 3 vetores utilizando a função
echo "\n\n---Celcius Para Fahrenheit---\n\n";

foreach($vetor1 as $celcius){
    echo $celcius . " - "; 

}

echo "\n\n---Fatorial---\n\n";
foreach($vetor2 as $fatorial){
    echo $fatorial . " - ";

}

echo "\n\n---Função---\n\n";
foreach($vetor3 as $funcao){
    echo $funcao . " - ";

}

