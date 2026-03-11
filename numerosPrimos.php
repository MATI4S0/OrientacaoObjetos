<?php

//Funções
function primo($numero)
{
    $countDesconhecido = 0;
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $countDesconhecido++;
        }
    }
    if ($countDesconhecido > 2) {
        return false;
    } else {
        return true;
    }
}

do {
    $numero = readline("Informe um número: ");

    if ($numero == 1) {
        break;
    } else {
        $testePrimo = primo($numero);
        if ($testePrimo == true) {
            echo "Esse número é Primo\n";
        } else {
            echo "Este número não é Primo\n";
        }
    }
} while (true);
