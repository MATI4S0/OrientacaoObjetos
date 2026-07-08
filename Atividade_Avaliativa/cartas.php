<?php

class Cartas
{

    //Atributos
    private $numero;
    private $nome;
    private $desenho;

    //Métodos
    public function __construct(int $numero, string $nome, string $desenho)
    {
        $this->numero = $numero;
        $this->nome = $nome;
        $this->desenho = $desenho;
    }

    //Gets e Sets

       public function getNumero()
    {
        return $this->numero;
    }


    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }


    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }


    public function getDesenho()
    {
        return $this->desenho;
    }

    public function setDesenho($desenho): self
    {
        $this->desenho = $desenho;

        return $this;
    }
    
}
//Programa Principal
$baralho = [];

$baralho[] = new Cartas(
    1,
    "Ás de Espadas\n",
    "+-------+
|A      |
|       |
|   ♠   |
|       |
|      A|
+-------+\n\n"
);

$baralho[] = new Cartas(
    2,
    "Dois de Copas\n",
    "+-------+
|2      |
|       |
|   ♥   |
|       |
|      2|
+-------+\n\n"
    
);

$baralho[] = new Cartas(
    3,
    "Três de Ouros\n",
    "+-------+
|3      |
|       |
|   ♦   |
|       |
|      3|
+-------+\n\n"
);

$baralho[] = new Cartas(
    4,
    "Quatro de Paus\n",
    "+-------+
|4      |
|       |
|   ♣   |
|       |
|      4|
+-------+\n\n"
);

$baralho[] = new Cartas(
    5,
    "Cinco de Espadas\n",
    "+-------+
|5      |
|       |
|   ♠   |
|       |
|      5|
+-------+\n\n"
);

$baralho[] = new Cartas(
    6,
    "Seis de Copas\n",
    "+-------+
|6      |
|       |
|   ♥   |
|       |
|      6|
+-------+\n\n"
);

$baralho[] = new Cartas(
    7,
    "Sete de Ouros\n",
    "+-------+
|7      |
|       |
|   ♦   |
|       |
|      7|
+-------+\n\n"
);

$carta_sorteada = $baralho[array_rand($baralho)];

echo "Cartas: \n";

foreach ($baralho as $cartas) {
    echo $cartas->getNome();
    echo $cartas->getDesenho();

}
