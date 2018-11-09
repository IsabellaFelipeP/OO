<?php


class Cliente
{
    private $nome;
    private $cpf;
    private $endereco;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function Dados()
    {
        $dados = array(1 => 'Joao', '02234578923', 'Florida Branca',
            2 => 'Maria', '00123478911', 'Mar Branca',
            3 => 'Carlos', '00345672189', 'Pedra Branca');
    }



}
