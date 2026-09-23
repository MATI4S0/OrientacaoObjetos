<?php

class Dinossauro {
    // ATRIBUTOS
    protected string $nome;
    protected string $especie;
    protected int $idade;
    protected int $peso;
    protected int $velocidade;

    // GETS E SETS 

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEspecie(): string
    {
        return $this->especie;
    }

    public function setEspecie(string $especie): self
    {
        $this->especie = $especie;

        return $this;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    public function getPeso(): int
    {
        return $this->peso;
    }

    public function setPeso(int $peso): self
    {
        $this->peso = $peso;

        return $this;
    }

    public function getVelocidade(): int
    {
        return $this->velocidade;
    }

    public function setVelocidade(int $velocidade): self
    {
        $this->velocidade = $velocidade;

        return $this;
    }

}