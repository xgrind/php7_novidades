<?php

class Conta
{
    function sacar(Object $obj)
    {
        return $obj->verSaldo();
    }
}



$conta = new Conta();
$conta->sacar(
    new Class 
    {   
        function verSaldo()
        {
            echo "10.000";
        }
    }
);