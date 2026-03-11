<?php

    $valorTotal = 0;


    do{

        $contribuição = readline("Informe o valor da contribuição: ");
        $valorTotal += $contribuição;

    } while ($contribuição > 0);

    echo "Valor arrecadado: " . $valorTotal . "\n";