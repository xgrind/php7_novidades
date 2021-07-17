<?php 

    declare(strict_types=1);
    
    function somar(int $n1, int $n2) 
    {
        return $n1 + $n2;
    }

    function nome(string $nomeCompleto)
    {
        $nomeCompleto = explode(" ", $nomeCompleto);
        return $nomeCompleto[0];
    }


    echo somar("a",5);
    echo "<br>";
    echo nome("Michael Martins");