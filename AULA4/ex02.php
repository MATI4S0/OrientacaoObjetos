<?php

$cidadania1 = [
    "pessoa" => "Manuel de Madeireiros",
    "endereco" => "Rua das Acácias",
    "cidade" => "Foz do Iguaçu",
    "UF" => "PR"
];

$cidadania2 = [
    "pessoa" => "Juliana de Amaral",
    "endereco" => "Rua dos Pinheros",
    "cidade" => "Florianópolis",
    "UF" => "SC"
];

$cidadania3 = [
    "pessoa" => "Rodrigo Baidek",
    "endereco" => "Rua Dom Predo I",
    "cidade" => "Petrópolis",
    "UF" => "RJ"
];

$cidadania4 = [
    "pessoa" => "Fabiola da Silva",
    "endereco" => "Rua Chile",
    "cidade" => "Guarulhos",
    "UF" => "SP"
];



$conjuntoCidadania = array($cidadania1, $cidadania2, $cidadania3, $cidadania4);
echo "     Nome       | Endereço    | Cidade   |   UF \n";

foreach ($conjuntoCidadania as $conj) {
    echo $conj["pessoa"] . " | " . $conj["endereco"] . " | " . $conj["cidade"] . " | " . $conj["UF"] . " \n ";
}