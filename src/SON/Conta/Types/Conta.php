<?php
/**
 * Created by PhpStorm.
 * User: isabe
 * Date: 30/10/18
*/

namespace SON\Conta\Types;

use SON\Conta\ContaAbstract;

class Conta extends ContaAbstract
{

        protected function CalculoDeposito($valor){
                return $valor += 10;
        }
}