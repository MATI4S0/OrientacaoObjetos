<?php

class Herbivoro extends Dinossauro {

    private string $plantaPreferida;

    public function getPlantaPreferida(): string
    {
        return $this->plantaPreferida;
    }

    public function setPlantaPreferida(string $plantaPreferida): self
    {
        $this->plantaPreferida = $plantaPreferida;

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