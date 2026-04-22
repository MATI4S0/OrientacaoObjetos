<?php

class Pessoa
{
    //Atributos
    public $nome;
    public $endereco;
    public $cidade;
    public $UF;
    public $altura;

    function falarOla()
    {
        echo "Olá mundo, sou " . $this->nome . "\n";
    }

    function falarEndereco()
    {
        echo "Moro em " . $this->endereco . ", " . $this->cidade . " no " . $this->UF . "\n";
    }

    function falarAltura()
    {
        echo "Tenho " . $this->altura . " metros!\n\n";
    }
}

//Programa Principal

$pessoa1 = new Pessoa;
$pessoa1->nome = readline("Digite seu nome: ");
$pessoa1->endereco = readline("Digite o seu endereço:");
$pessoa1->cidade = readline("Digite a cidade que você mora: ");
$pessoa1->UF = readline("Digite seu UF: ");
$pessoa1->altura = readline("Digite sua altura: ");
$pessoa1->falarOla();
$pessoa1->falarEndereco();
$pessoa1->falarAltura();
