<?php

class Pessoa
{
    //Atributos
    private $nome;
    private $sobrenome;
    private $idade;

    //Metodos

    public function retornaApresentacao()
    {
        $dados = "Olá, sou " . $this->nome;
        $dados .= " " . $this->sobrenome;
        $dados .= " e tenho " . $this->idade;
        $dados .= " anos!\n";
        return $dados;
    }

    //Gets e Sets
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}
//Programa Principal

$pessoa = new Pessoa();
$pessoa->setNome("Mateus");
$pessoa->setSobrenome("França");
$pessoa->setIdade(15);
echo "Nome completo da pessoa: " . $pessoa->getNome() . " " . $pessoa->getSobrenome() .  "\n";
echo $pessoa->retornaApresentacao();
