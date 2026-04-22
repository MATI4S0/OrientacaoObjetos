<?php

class Retangulo
{
    public $base;
    public $altura;

    function area()
    {
        echo "A área é: " . $this-> . "\n";
    }

    function perimetro()
    {
        echo "O perimetro é: " . $this-> . "\n";
    }
}

$retangulo1 = new Retangulo;
$retangulo1->base = readline("Informe a área de um retangulo: ");
$retangulo1->altura = readline("Informe a altura de um triangulo: ");
$retangulo1->area();
$retangulo1->perimetro();
