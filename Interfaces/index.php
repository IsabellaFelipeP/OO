<?php 
/*
require_once "Pessoa.php";

$pessoa1 = new Pessoa("Wesley", 30);

$pessoa2 = new Pessoa("Maria", 20);

echo $pessoa1->correr(50);
*/ 

require_once "Produto.php";
require_once "Tenis.php";

$produto = new Produto();

$produto->setNome("Tenis Exemplo")
        ->setDescricao("essa é a descrição do produto")
        ->setEstoque(10)
        ->setValor(1000);



/*
$tenis = new TenisAdidas();
$tenis->getCor();

$tenis2 = new SapaTenis();
$tenis2->getCor();
$tenis2->getTamanho();

*/

