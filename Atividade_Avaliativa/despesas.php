<?php

class Receita
{

    //Atributos
    private string $descricao;
    private float $valor;

    //Métodos
    public function __toString()
    {
        $dados = "Descrição: " . $this->descricao . "\n";
        $dados .= "Valor: " . $this->valor . "\n";

        return $dados;
    }

    //Gets e Sets
    public function getDescricao(): string
    {
        return $this->descricao;
    }


    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }


    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

class Despesa
{

    //Atributos
    private string $descricao;
    private float $valor;

    //Métodos 
    public function __toString()
    {
        $dados = "Descrição: " . $this->descricao . "\n";
        $dados .= "Valor: " . $this->valor . "\n";

        return $dados;
    }


    //Gets E Sets
    public function getDescricao(): string
    {
        return $this->descricao;
    }


    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

//Programa Principal

$receita = [];
$dispesa = [];

do {

    $choise = 0;

    echo "=============================\n";
    echo "      MENU PRINCIPAL\n";
    echo "=============================\n";
    echo "(1) Adicionar receita\n";
    echo "(2) Adicionar despesa\n";
    echo "(3) Listar receitas\n";
    echo "(4) Listar despesas\n";
    echo "(5) Sumarizar\n";
    echo "(0) Sair\n";
    echo "=============================\n";

    $choise = readline("Escolha uma opção: ");


    switch ($choise) {
        case '1':
            $receitar = new Receita();
            $receitar->setDescricao(readline("Descreva sua receita: "));
            $receitar->setValor(readline("Informe o valor da sua receita: "));
            array_push($receita, $receitar);

            break;

        case '2':
            $despesar = new Despesa();
            $despesar->setDescricao(readline("Descreva sua despesa: "));
            $despesar->setValor(readline("Informe o valor da sua despesa: "));
            array_push($dispesa, $despesar);

            break;

        case '3':
            foreach ($receita as $rec) {
                echo $rec . "\n\n";
            }
            break;

        case '4':
            foreach ($dispesa as $dis) {
                echo $dis . "\n\n";
            }
            break;

        case '5':
            $total_dispesa = 0;
            $total_receita = 0;

            foreach ($dispesa as $dis) {
                $total_dispesa += $dis->getvalor();
            }

            foreach ($receita as $rec) {
                $total_receita += $rec->getvalor();
            }

            $saldo = $total_dispesa - $total_receita;

            echo "\nTotal Receita: " . $total_receita;

            echo "Total Dispesa: " . $total_dispesa;

            echo "Saldo: " . $saldo . "\n\n";

            break;


        case '0':
            echo "Saindo...\n";
            break;

        case 'default':
            break;
    }
} while ($choise != 0);
