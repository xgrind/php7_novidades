<?php 

abstract class Conta 
{
    abstract public function verSaldo(int $idUser);
}

abstract class ContaCorrente extends Conta
{
    abstract public function verSaldo($idUser): int;
}