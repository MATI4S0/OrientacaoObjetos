<?php

class Retangulo
{
    //Atributos
    public $base;
    public $altura;

    //Construtor da Classe
    function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    //Métodos
    function area()
    {
        $area = $this->base * $this->altura;
        return $area;
    }

    function perimetro()
    {
        $perimetro = 2 * ($this->base + $this->altura);
        return $perimetro;
    }
}//Fim da Classe

$contador = 0;

for($i = 0; $i < 3; $i++){
    $base = readline("Informe a área de um retangulo: ");
    $altura = readline("Informe a altura de um triangulo: ");

    $retangulo1 = new Retangulo($base, $altura);

    $area = $retangulo1->area();
    $perimetro = $retangulo1->perimetro();
    
    echo "A área do retângulo é: " . $area . "\n";
    echo "o perimetro do retângulo é: " . $perimetro . "\n";

}


