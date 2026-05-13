<?php

class Livro
{

    //ATRIBUTOS
    private string $titulo;
    private string $autor;
    private string $genero;
    private int $numPag;
    

    //MÉTODOS
    public function getDados(){
        $dados = "Titulo: " . $this->titulo . "\n";
        $dados .= "Autor: " . $this->autor. "\n";
        $dados .= "Gênero: " . $this->genero . "\n";
        $dados .= "Quantidade de Páginas: " . $this->numPag . "\n";
        return $dados;
    }

    public function __toString()
    {
        $dados = "Titulo: " . $this->titulo . "\n";
        $dados .= "Autor: " . $this->autor. "\n";
        $dados .= "Gênero: " . $this->genero . "\n";
        $dados .= "Quantidade de Páginas: " . $this->numPag . "\n";
        return $dados;
    }

    //Gets e Sets

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }


    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero(string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }


    public function getNumPag()
    {
        return $this->numPag;
    }


    public function setNumPag(int $numPag): self
    {
        $this->numPag = $numPag;

        return $this;
    }
}

//PROGRAMA PRINCIPAL
$livro1 = new Livro();
$livro1->setTitulo(readline("Informe o título: "));
$livro1->setAutor(readline("Informe o autor: "));
$livro1->setGenero(readline("Informe o gênero: "));
$livro1->setNumPag(readline("Informe a quantidade de páginas: "));

$livro2 = new Livro();
$livro2->setTitulo(readline("Informe o título: "));
$livro2->setAutor(readline("Informe o autor: "));
$livro2->setGenero(readline("Informe o gênero: "));
$livro2->setNumPag(readline("Informe a quantidade de páginas: "));

$livro3 = new Livro();
$livro3->setTitulo(readline("Informe o título: "));
$livro3->setAutor(readline("Informe o autor: "));
$livro3->setGenero(readline("Informe o gênero: "));
$livro3->setNumPag(readline("Informe a quantidade de páginas: "));

$livroMaior = $livro1;

if ($livro2->getNumPag() > $livroMaior->getNumPag())
    $livroMaior = $livro2;

if ($livro3->getNumPag() > $livroMaior->getNumPag()) 
    $livroMaior = $livro3;


//Imprimir o Maior Livro

echo "\n---Livro com Mais Páginas---\n";

echo $livroMaior;