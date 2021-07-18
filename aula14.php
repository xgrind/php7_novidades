<?php

// $total = 10 / 0;

// echo $total;

try  {
    // throw new Exception("Error Processing Request", 1);
    $total = 10 % 0;
} catch(DivisionByZeroError | Exception $e) {
    echo "Error! -> {$e->getMessage()}"; 
}