<?php
//Declarando a classe
class Monitor
{
    //Atributos
    public $polegadas;
    public $resolucao;
    public $marca;
    public $cor;
    public $voltagem;

    //Métodos
    function ligar()
    {
        echo "Monitor ligado\n";
    }
    function desligar()
    {
        echo "Monitor desligado\n";
    }
    function exibirimagem()
    {
        echo "Monitor exibindo imagem na resolução de:  " . $this->resolucao . "px\n";
    }
}

//Programa Principal
$monitor1 = new Monitor();
$monitor1 -> polegadas = 23;
$monitor1 -> resolucao = "1920x1080";
$monitor1 -> marca = "AOC";
$monitor1 -> cor = "Preto";
$monitor1 -> voltagem = 220;
$monitor1 -> ligar();
$monitor1 -> exibirimagem();
$monitor1 -> desligar();
printf("Resolução: %s | Marca: %s\n\n", $monitor1->resolucao, $monitor1->marca);

//Criar o monitor 2
$monitor2 = new Monitor();
$monitor1 -> polegadas = 15;
$monitor1 -> resolucao = "1260x860";
$monitor1 -> marca = "ACER";
$monitor1 -> cor = "Prata";
$monitor1 -> voltagem = 120;
$monitor1 -> ligar();
$monitor1 -> exibirimagem();
$monitor1 -> desligar();
printf("Cor: %s | Marca: %s\n\n", $monitor1->cor, $monitor1->marca);