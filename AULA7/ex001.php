<?php

//Funções
function soma(array $vetor)
{
    $soma = 0;
    foreach ($vetor as $v)
        $soma += $v;

    return $soma;
}

function qtdPares(array $vetor)
{
    $qtdPares = 0;
    foreach ($vetor as $v) {
        if ($v % 2 == 0)
            $qtdPares++;
    }

    return $qtdPares;
}

function qtdImpares(array $vetor)
{
    $qtdImpares = 0;
    foreach ($vetor as $v) {
        if ($v % 2 != 0)
            $qtdImpares++;
    }

    return $qtdImpares;
}

function qtdDivCinco(array $vetor)
{
    $qtdDivCinco = 0;
    foreach ($vetor as $v) {
        if ($v % 5 == 0)
            $qtdDivCinco++;
    }

    return $qtdDivCinco;
}

function difMaiorMenor(array $vetor)
{
    $menor = $vetor[0];
    $maior = $vetor[0];

    //Encontra o menor
    foreach ($vetor as $v) {
        if ($v < $menor)
            $menor = $v;
    }

    //Encontra o maior
    foreach ($vetor as $v) {
        if ($v > $maior)
            $maior = $v;
    }

    return $maior - $menor;
}

function qtdTresSeisNove(array $vetor)
{
    $qtdTresSeisNove = 0;
    foreach ($vetor as $v) {
        if ($v == 3 || $v == 6 || $v == 9)
            $qtdTresSeisNove++;
    }

    return $qtdTresSeisNove;
}

//Código Principal

$numero  = array();

do {
    $num = readline("Informe um número: ");
    if ($num > 0) {
        array_push($numero, $num);
    }
} while ($num > 0);

echo "Soma: " . soma($numero) . "\n";

printf("Qunatidade de pares: %d\n", qtdPares($numero));

printf("Qunatidade de impares: %d\nQuantidade de divisiveís por 5: %d\n", qtdImpares($numero), qtdDivCinco($numero));

printf("Diferença maior e menor: %d\nQuantidade de 3, 6 e 9: %d\n", difMaiorMenor($numero), qtdTresSeisNove($numero));
