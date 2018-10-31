<?php
/**
 * Created by PhpStorm.
 * User: isabe
 * Date: 30/10/18
 */

namespace SON\Conta\Types;

use SON\Conta\ContaAbstract;

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