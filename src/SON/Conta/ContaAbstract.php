<?php
/**
 * Created by PhpStorm.
 * User: isabe
 * Date: 30/10/18
 */

namespace SON\Conta;

use SON\Conta\Util\ProcessoTrait;

abstract class ContaAbstract
{
    use ProcessoTrait;
    protected $saldo;


    public final function depositar($valor){
        $this->IniciaProcesso();
        $this->saldo += $this->CalculoDeposito($valor);
        $this->FinalizaProcesso();
        return true;
    }

    public function sacar($valor){
        $this->IniciaProcesso();
        if($this->saldo >= valor) {
            $this->saldo -= $valor;
            $this->FinalizaProcesso();
            return true;
        }
        $this->FinalizaProcesso();
        return false;
    }

    public function getSaldo(){
        return $this->saldo;

    }



    abstract protected function CalculoDeposito($valor);
}