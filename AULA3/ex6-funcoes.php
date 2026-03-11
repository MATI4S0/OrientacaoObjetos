<?php

//Funções
function divisaoExata($dividendo, $divisor){

    if($dividendo % $divisor == 0)
        return true;

    else
        return false;
}

//Programa Principal
do {
$numero = readline("Informe um número: ");
for($div=$numero-1; $div >=1; $div--){
    $dividiu = divisaoExata($numero, $div);
    if ($dividiu == true) {
        echo $div . ", ";
    }
}
echo "\n";
} while($numero > 1);
