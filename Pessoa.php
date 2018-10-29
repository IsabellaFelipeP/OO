<?php

class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }


    public function correr($km){
        /*Ex1: de chamanda de um metodo dentro da classe: 
         
        echo "Essa pessoa correu"; */

        /*Ou se não, exemplo 2 para dar referencia de quem correu: */

        echo $this->nome." está correndo";
        for($i=0; $km > $i; $i++){
            echo "."; 
        }
        echo $this->nome." terminou de correr!";
    }
}

