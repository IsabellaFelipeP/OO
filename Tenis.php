<?php

class Tenis extends Produto 
{
    public $cor;
    public $tamanho;

    /*
    public function __construct ($nome, $descricao, $valor, $estoque){
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->estoque = $estoque;
    }  */

    public function BaixaEstoque(){
        $this->estoque = $this->estoque - 1;

    }

}