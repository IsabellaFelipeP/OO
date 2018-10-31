<?php
/**
 * Created by PhpStorm.
 * User: isabe
 * Date: 30/10/18
 */

namespace SON\Conta\Types;

class ContaPremium extends \SON\Conta\ContaAbstract
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