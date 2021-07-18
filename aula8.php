<?php 

function somar(int $n1, ?int $n2): ?int
{
    // if ($n1 > 0) {
    //     return $n1 + $n2;
    // } else {
    //     return null;
    // }

    return ($n1 > 0) ? $n1 + $n2 : null;
}

var_dump(somar(0, 2));