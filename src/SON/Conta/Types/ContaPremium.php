<?php
/**
 * Created by PhpStorm.
 * User: isabe
 * Date: 30/10/18
 */

class ContaPremium extends ContaAbstract
{
    public function __construct()
    {
        $this->saldo +=10;
    }

    protected function CalculoDeposito($valor)
    {
        return $valor+= 20;
    }
}