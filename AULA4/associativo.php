<?php

//ARRAY ASSOCIATIVO

$pessoa = [
    "nome" => "Daniel",
    "profissao" => "Professor",
    "idade" => 28];


echo "O professor tem " . $pessoa["idade"] . " anos." ;

foreach($pessoa as $humano ){

    echo "Dado = " . $humano . "\n";

}