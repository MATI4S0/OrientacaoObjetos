<?php

require_once("Modelo/Dinossauro.php");
require_once("Modelo/Carnivoro.php");
require_once("Modelo/Herbivoro.php");

$carnivoros = [];
$herbivoros = [];

do {
    echo "========================================\n";
    echo "       🦖 PARQUE DOS DINOSSAUROS\n";
    echo "========================================\n";
    echo "1 - Cadastrar dinossauro\n";
    echo "2 - Listar dinossauros\n";
    echo "3 - Exibir informações\n";
    echo "4 - Alimentar dinossauro\n";
    echo "5 - Excluir dinossauro\n";
    echo "0 - Sair\n"  ;
    echo "========================================\n";

    $opcao = readline("Informe a sua opção: ");

    switch($opcao){
        case '1';
            $tipo = readline("Qual o tipo do seu dinossauro? (Carnivoro ou Herbivoro)\n\n");
            
            if($tipo == "Carnivoro"){
                $dinossauro = new Carnivoro();
                echo "Dados do Dinossauro\n";

                $dinossauro->setNome(readline("Nome: "));
                $dinossauro->setEspecie(readline("Espécie: "));
                $dinossauro->setIdade(readline("Idade: "));
                $dinossauro->setPeso(readline("Peso: "));
                $dinossauro->setVelocidade(readline("Velocidade: "));
                $dinossauro->setCarnePreferida(readline("Carne Preferida: "));

                $carnivoros[] = $dinossauro;

                echo "Dinossauro Cadastrado!!!\n\n";

            } elseif ($tipo == "Herbivoro") {
                echo "Dados do Dinossauro\n";

                $dinossauro = new Herbivoro();
                $dinossauro->setNome(readline("Nome: "));
                $dinossauro->setEspecie(readline("Espécie: "));
                $dinossauro->setIdade(readline("Idade: "));
                $dinossauro->setPeso(readline("Peso: "));
                $dinossauro->setVelocidade(readline("Velocidade: "));
                $dinossauro->setPlantaPreferida(readline("Planta Preferida: "));

                $herbivoros[] = $dinossauro;

                echo "Dinossauro Cadastrado!!!\n\n";
            }

            break;
        case '2';

            $Listar = readline("Informe qual deseja: (Carnívoros ou Herbivoros)\n\n");

            if($Listar == "Carnivoros"){
                foreach($carnivoros as $c){
                    echo $c . "\n";
                }
            }

            break;
        case '3';
        
            break;
        case '4';

            break;
        case '5';
        
            break;

        default;
            echo "Opção Inválida!\n";
            break;
    }

} while ($opcao != 0);