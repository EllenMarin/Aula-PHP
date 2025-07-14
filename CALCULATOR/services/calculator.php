<?php

function sum(float $num1, float $num2):float {
    return $num1 + $num2;
}

function sub(float $num1, float $num2):float {
    return $num1 - $num2;
}

function multiply(float $num1, float $num2):float {
    return $num1 * $num2;
}

function division(float $num1, float $num2):float {
    if($num1 == 0 || $num2 == 0){
        throw new Exception("Não é possivel dividir por zero");
    }
    return $num1 / $num2;
}

function power(int $base, int $exp): float {
    $total = 1;
    $abs = $exp < 0? $exp * -1 : $exp;

    while($abs-- > 0){
        $total *= $base;
    }

    return $exp < 0 ? 1 / $total : $total;
}