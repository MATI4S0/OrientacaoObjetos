<?php

class Pokemon {

    //Atributos
    public string $nome;
    public string $tipo;
    public int $EXP;
    public int $HP;
    public int $ATK;
    public int $DEF;
    public int $Speed;
    public int $nivel;

    //Métodos

    function __construct($nome, $tipo, $EXP, $HP, $ATK, $DEF, $Speed, $nivel)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->EXP = $EXP;
        $this->HP = $HP;
        $this->ATK = $ATK;
        $this->DEF = $DEF;
        $this->Speed = $Speed;
        $this->nivel = $nivel;

    }

    function evolucao (){
        $ganhar = random_int(1, 2);

        echo "Seu Pokémon entrou em uma batalha!!";

        if ($ganhar == 1) {
            echo "\n\nSeu pokémon ganhou!!\n\n";
            $this->totalXP(random_int(5, 25));
            $this->HP += 10;
            $this->ATK += 15;
            $this->DEF += 12;
            $this->Speed += 10;
        }else {
            echo "\n\nSeu pokémon perdeu!!\n\n";
        }
    }

    function totalXP ($quantidade){
        $this->EXP += $quantidade;
        if($this->EXP >= 10){
            $this->uparNivel();
        }
    }

    function uparNivel(){
        $this->nivel ++;
        echo "\n\nSeu pokémon upou de nível!!\n\n";
    }

    function imprimirAtributos(){

        echo "\n\nNOME DO SEU POKÉMON:" . $this->nome . "\n";
        echo "TIPO: " . $this->tipo . "\n";
        echo "EXPERIENCIA: " . $this->EXP . "\n";
        echo "HP: " . $this->HP . "\n";
        echo "PONTOS DE ATAQUE: " . $this->ATK . "\n";
        echo "PONTOS DE DEFESA: " . $this->DEF . "\n";
        echo "PONTOS DE SPEED: " . $this->Speed . "\n";
        echo "SEU NIVEL: " . $this->nivel . "\n";

    }



}

$pokemon1 = new Pokemon("Totodile", "agua", 0, 50, 65, 64, 47, 1);
echo "\n\nSTATUS ANTES DA BATALHA: ";
$pokemon1-> imprimirAtributos();
$pokemon1-> evolucao();
echo "STATUS DEPOIS DA BATALHA: ";
$pokemon1-> imprimirAtributos();

$pokemon2 = new Pokemon("Haunter", "fantasma", 0, 45, 50, 45, 95, 1);
echo "\n\nSTATUS ANTES DA BATALHA: ";
$pokemon2-> imprimirAtributos();
$pokemon2-> evolucao();
echo "STATUS DEPOIS DA BATALHA: ";
$pokemon2-> imprimirAtributos();
