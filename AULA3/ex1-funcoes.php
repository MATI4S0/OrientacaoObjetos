<?php
 
function fatorial($num){

    $factorial = 1;

    for ($i=$num; $i > 0  ; $i--) { 
        $factorial *= $i;
        
    }

    return $factorial;

}

//Código Principal

do {

$num = readline("(0 PARA PARAR)Informe um valor: ");

if ($num == 0) {
    break;
}

$fatoracao = fatorial($num);
echo $fatoracao . "\n";

} while (true);