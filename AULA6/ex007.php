<?php

class Cidade
{
    //Atributos
    private string $nome;
    private int $populacao;
    private int $area;

    //Metodos

    public function aumentarPopulacao() {}

    public function modificarArea() {}

    public function mudarNome() {}

    public function getDados()
    {
        $dados = "=========DADOS=========\n";
        $dados .= "Nome: " . $this->nome . "       \n";
        $dados .= "Area: " . $this->area . "            \n";
        $dados .= "População: " . $this->populacao . "       \n";
        $dados .= "=======================\n";

        return $dados;
    }

    //Gets e Sets
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getPopulacao()
    {
        return $this->populacao;
    }

    public function setPopulacao(int $populacao): self
    {
        $this->populacao = $populacao;

        return $this;
    }

    public function getArea()
    {
        return $this->area;
    }

    public function setArea(int $area): self
    {
        $this->area = $area;

        return $this;
    }
}

$cidade = new Cidade;
$cidade->setNome("Lumérida");
$cidade->setArea(742);
$cidade->setPopulacao(550);
$cidade->getDados();

print $cidade->getDados();


readline();
system("clear");

while (true) {

    print "=========MENU=========\n";
    print "1-Mudar Nome        \n";
    print "2-Mudar sua Area    \n";
    print "3-Diminuir População\n";
    print "4-Aumentar População\n";
    print "5-Sair              \n";
    print "======================\n";

    $TheChoice = readline("Digite sua escolha: ");

    if ($TheChoice == 5) {
        break;
    }



    switch ($TheChoice) {
        case '1':
            $mudanca = readline("Informe o novo nome: ");
            system("clear");
            $cidade->setNome($mudanca);
            echo $cidade->getDados();
            break;

        case '2':
            $mudancaArea = readline("Informe a nova area: ");
            system("clear");
            $cidade->setArea($mudancaArea);
            echo $cidade->getDados();
            break;

        case '3':
            $mudancaPopmenos = readline("Informe a nova quantia de população: ");
            system("clear");
            $cidade->setPopulacao($mudancaPopmenos);
            echo $cidade->getDados();
            break;

        case '4':
            $mudancaPopmais = readline("Informe a nova quantia de população: ");
            system("clear");
            $cidade->setPopulacao($mudancaPopmais);
            echo $cidade->getDados();
            break;

        default:
            break;
    }
}
