<?php

//array

$v = array(1, 2, 4, 5);


//Adicionar um novo elemento no array

$adicao = readline("Escreva um número para adicionar no array: ");

array_push($v, $adicao );

// Como escrever uma posição especifica

echo "Segunda posição do array: " . $v[1];
echo "\n";

echo "Quarta posição do array: " . $v[3];
echo "\n";

//forma de percorrer todo o array
//FOR:
$tamanho = count($v);
for ($i=0; $i < $tamanho ; $i++) { 
    echo $v[$i] . "\n";
}

//FORACH

foreach($v as $array){
    echo $array . "\n";
}
