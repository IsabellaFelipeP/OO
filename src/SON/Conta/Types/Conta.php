<?php
/**
 * Created by PhpStorm.
 * User: isabe
 * Date: 30/10/18
*/

class Conta extends ContaAbstract
{

        protected function CalculoDeposito($valor){
                return $valor += 10;
        }
}