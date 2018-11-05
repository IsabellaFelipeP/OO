<?php

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$conta = new SON\Conta\Types\Conta();
$conta->depositar(10);
echo $conta->getSaldo();

$bancoSantander = new SON\Banco\Santander();
$bancoSantander->setConta($conta);
$bancoSantander->setNome("Santander Exemplo");


$resultado = Math::somar(10,10);

$bancoSantander->getConta()->getSaldo();
 /*
require_once "Pessoa.php";

$pessoa1 = new Pessoa("Wesley", 30);

$pessoa2 = new Pessoa("Maria", 20);

echo $pessoa1->correr(50);
*/

/*
require_once "Produto.php";
require_once "Tenis.php";

$produto = new Produto();

$produto->setNome("Tenis Exemplo")
        ->setDescricao("essa é a descrição do produto")
        ->setEstoque(10)
        ->setValor(1000);

*/

/*
$tenis = new TenisAdidas();
$tenis->getCor();

$tenis2 = new SapaTenis();
$tenis2->getCor();
$tenis2->getTamanho();

*/

