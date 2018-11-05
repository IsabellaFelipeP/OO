<?php

use \SON\Conta\Types\Conta;
use \SON\Conta\ContaAbstract;

class Santander
{
    private $nome;
    private $conta;



    public function __construct(ContaAbstract $conta)
    {
        if($conta instanceof SON\Banco\Conta\ContaAbstract){
            $this->conta = $conta;
        }
    }


    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getConta()
    {
        return $this->conta;
    }

    public function setConta($conta)
    {
        $this->conta = $conta;
    }
}