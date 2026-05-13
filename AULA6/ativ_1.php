<?php

class Carros {
    //Atributos
    private string $modelo;
    private string $marca;
    private int $anoFabricacao;
    private int $velocidadeMax;

    //Métodos
    public function __toString()
    {
        $dados = "Modelo: " . $this->modelo . "\n";
        $dados .= "Marca: " . $this->marca . "\n";
        $dados .= "O Ano de fabricação: " . $this->anoFabricacao . "\n";
        $dados .= "A velocidade máxima: " . $this->velocidadeMax . "\n";
        return $dados;
    }

    //GET SET

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca(string $marca): self
    {
        $this->marca = $marca;

        return $this;
    }


    public function getAnoFabricacao()
    {
        return $this->anoFabricacao;
    }


    public function setAnoFabricacao(int $anoFabricacao): self
    {
        $this->anoFabricacao = $anoFabricacao;

        return $this;
    }


    public function getVelocidadeMax()
    {
        return $this->velocidadeMax;
    }


    public function setVelocidadeMax(int $velocidadeMax): self
    {
        $this->velocidadeMax = $velocidadeMax;

        return $this;
    }
}

//Programa Principal

$carro1 = new Carros();
$carro1->setModelo(readline("Informe o modelo do seu carro: "));
$carro1->setMarca(readline("Informe a marca do seu carro: "));
$carro1->setAnoFabricacao(readline("Informe o ano de fabricação do seu carro: "));
$carro1->setVelocidadeMax(readline("Informe a velocidade máxima do seu carro: "));

$carro2 = new Carros();
$carro2->setModelo(readline("Informe o modelo do seu carro: "));
$carro2->setMarca(readline("Informe a marca do seu carro: "));
$carro2->setAnoFabricacao(readline("Informe o ano de fabricação do seu carro: "));
$carro2->setVelocidadeMax(readline("Informe a velocidade máxima do seu carro: "));

$carro3 = new Carros();
$carro3->setModelo(readline("Informe o modelo do seu carro: "));
$carro3->setMarca(readline("Informe a marca do seu carro: "));
$carro3->setAnoFabricacao(readline("Informe o ano de fabricação do seu carro: "));
$carro3->setVelocidadeMax(readline("Informe a velocidade máxima do seu carro: "));


$CarroMaisRapido = $carro1;

if($carro2->getVelocidadeMax() > $CarroMaisRapido->getVelocidadeMax())
    $CarroMaisRapido = $carro2;
if($carro3->getVelocidadeMax() > $CarroMaisRapido->getVelocidadeMax())
    $CarroMaisRapido = $carro3;

$CarroMaisLento = $carro1;

if($carro2->getVelocidadeMax() < $CarroMaisRapido->getVelocidadeMax())
    $CarroMaisLento = $carro2;
if($carro3->getVelocidadeMax() < $CarroMaisRapido->getVelocidadeMax())
    $CarroMaisLento = $carro3;

//Imprimir Dados

echo "\n=== O Carro Mais Rápido ===\n";
echo $CarroMaisRapido;

echo "\n=== O Carro Mais Lento ===\n";
echo $CarroMaisLento;