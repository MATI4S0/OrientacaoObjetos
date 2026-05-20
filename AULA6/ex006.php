<?php

class Veiculo 
{
    //Atributos
    private int $capapacidade;
    private int $passagemVendidas;

    //Métodos
    public function __construct(int $capacidade) {
        $this->capapacidade = $capacidade;
        $this->passagemVendidas = 0;
        
    }

    public function venderPassagem(int $quantidade) {
        if ($this->passagemVendidas + $quantidade <= $this->capapacidade) {
            $this->passagemVendidas += $quantidade;

            print "Compra bem realizada!\n";
            return true;    
        }else {
            print "Seu pedido excedeu a capacidade do veiculo. Compra Negada!\n";
            return false;
        }
    }

    public function getCapapacidade(): int
    {
        return $this->capapacidade;
    }

    public function getPassagemVendidas(): int
    {
        return $this->passagemVendidas;
    }

}


//Programa Principal

$capacidade = readline("Insira a capacidade do seu veiculo: ");
$veiculo = new Veiculo($capacidade);


while (true) {
    $quantidade = readline("Insira a quantidade de passagens desejadas: ");
    
    if ($quantidade == 0) {
        break;
    }

    $veiculo->venderPassagem($quantidade);
}
