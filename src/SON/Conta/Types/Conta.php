<?php
/**
 * Created by PhpStorm.
 * User: isabe
 * Date: 30/10/18
*/

namespace SON\Conta\Types;

use SON\Conta\ContaAbstract as ContaAbstrata;

class Conta extends ContaAbstrata
{

        protected function CalculoDeposito($valor){
                return $valor += 10;
        }
}