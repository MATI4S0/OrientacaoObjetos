<?php

class Carnivoro extends Dinossauro {

    private string $carnePreferida;

    public function getCarnePreferida(): string
    {
        return $this->carnePreferida;
    }

    public function setCarnePreferida(string $carnePreferida): self
    {
        $this->carnePreferida = $carnePreferida;

        return $this;
    }

    public function exibirInfo(){

    echo "Dinossauro: "
        . $this->nome
        . "\nIdade: "
        . $this->idade
        . "\nPeso: "
        . $this->peso
        . "\nVelocidade: "
        . $this->velocidade;
    }   

}