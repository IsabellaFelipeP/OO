<?php 
/*
require_once "Pessoa.php";

$pessoa1 = new Pessoa("Wesley", 30);

$pessoa2 = new Pessoa("Maria", 20);

echo $pessoa1->correr(50);
*/ 

require_once "Produto.php";
require_once "Tenis.php";

$tenis = new TenisAdidas();
$tenis->getCor();

$tenis2 = new SapaTenis();
$tenis2->getCor();
$tenis2->getTamanho();



