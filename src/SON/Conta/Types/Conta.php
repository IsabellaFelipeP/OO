<?php
/**
 * Created by PhpStorm.
 * User: isabe
 * Date: 30/10/18
*/

namespace SON\Conta\Types;

class Conta extends \Son\Conta\ContaAbstract
{

        protected function CalculoDeposito($valor){
                return $valor += 10;
        }
}