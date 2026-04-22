<?php

//MATRIZ

$pokemon = [
    "nome" => "Pikachu",
    "tipo" => "Elétrico"
];

$pokemon2 = [
    "nome" => "Charmander",
    "tipo" => "Fogo"
];

$pokemon3 = [
    "nome" => "Psyduck",
    "tipo" => "Água"
];



$pokemons = array($pokemon, $pokemon2, $pokemon3);

echo "Nome do segundo pokémon: " . $pokemons[1]["nome"];