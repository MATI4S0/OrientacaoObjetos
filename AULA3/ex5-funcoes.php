<?php

//Função

function imprimeDados($nome, $habitantes, $area, $altitude, $estado){

    printf("%s|%d|%dkm²|%dm|%s\n", $nome, $habitantes, $area, $altitude, $estado);

}   

//Corpo do programa
imprimeDados("Foz do Iguaçu", 25000, 500, 145, "Paraná-PR");
imprimeDados("Cascavél", 300000, 420, 320, "Paraná-PR");
imprimeDados("Chapecó", 240000, 120, 620, "Santa Cataria-SC");
imprimeDados("Blumenau", 330000, 200, 85, "Santa Cataria-SC");
imprimeDados("Curitiba", 1500000, 300, 850, "Paraná-PR");