<?php
/**
 * Created by PhpStorm.
 * User: isabe
 * Date: 30/10/18
*/




require_once "Conta.php";
require_once "ContaPremium.php";

$conta = new ContaPremium();
$conta->depositar(100);
$conta->sacar(50);


echo $conta->getSaldo();