<?php

class Pessoa{

    //Atributos
    private string $nome;
    private string $endereco;
    private string $cidade;
    private string $UF;
    private int $altura;

    //Métodos
    public function retornaApresentacao(){
        $dados = "Olá, sou " . $this->nome;
        $dados .= ", resido no endereço " . $this->endereco;
        $dados .= ", " . $this->cidade;
        $dados .= "-" . $this->UF;
        $dados .= " e possuo uma altura de " . $this->altura . "\n";
        return $dados;
    }

    //gets e sets

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function setEndereco(string $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function setCidade(string $cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getUF(): string
    {
        return $this->UF;
    }

    public function setUF(string $UF): self
    {
        $this->UF = $UF;

        return $this;
    }

    public function getAltura(): int
    {
        return $this->altura;
    }

    public function setAltura(int $altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}

//programa

$count = 1;

do {

    $nome = readline("Seu nome: ");
    $endereco = readline("Seu indereço: ");
    $cidade = readline("Sua cidade: ");
    $UF = readline("Seu estado: ");
    $altura = readline("Sua altura: ");

    $pessoa = new Pessoa();
    $pessoa->setNome($nome);
    $pessoa->setEndereco($endereco);
    $pessoa->setCidade($cidade);
    $pessoa->setUF($UF);
    $pessoa->setAltura($altura);
    echo $pessoa->retornaApresentacao();
    $count ++;

} while ($count <= 2);
