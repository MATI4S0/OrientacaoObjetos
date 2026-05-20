<?php

class Calculadora {
    //Atributos
    private $numA;
    private $numB;

    //Métodos
    public function soma()
    {
        $soma = $this->numA + $this->numB;
        return $soma;
    }

    public function subtracao()
    {
        $subtracao = $this->numA - $this->numB;
        return $subtracao;
    }

    public function multiplicacao()
    {
        $multiplicacao = $this->numA * $this->numB;
        return $multiplicacao;
    }

    public function divisao()
    {
        $div = $this->numA / $this->numB;
        return $div;
    }

    public function resto()
    {
        $resto = $this->numA % $this->numB;
        return $resto;
    }

    //Gets Sets

    public function getNumA()
    {
        return $this->numA;
    }

    public function setNumA( $numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    public function getNumB()
    {
        return $this->numB;
    }

    public function setNumB( $numB): self
    {
        $this->numB = $numB;

        return $this;
    }
}
//PROGRAMA PRINCIPAL

$conta = new Calculadora();
$conta->setNumA(readline("Informe o primeiro número: "));
$conta->setNumB(readline("Informe o segundo número: "));

$resultadoSoma = $conta->soma();
$resultadoSub = $conta->subtracao();
$resultadoVezes = $conta->multiplicacao();
$resultadoDiv = $conta->divisao();
$resultadoResto = $conta->resto();

//Imprimi os resultados

echo "\n=== Resultados ===\n";

echo "Soma: " . $resultadoSoma . "\n";
echo "Subtração: " . $resultadoSub . "\n";
echo "Multiplicação: " . $resultadoVezes . "\n";
echo "Divisão: " . $resultadoDiv . "\n";
echo "Resto0: " . $resultadoResto . "\n";