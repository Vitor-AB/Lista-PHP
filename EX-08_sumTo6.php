<?php

// - Crie uma função que encontre o elemento N que, somado a outro elemento N ou K dentro de um array, resulte na soma 6


function sumTo6(array $arr, $n = null)
{

    $toSix = 6 - $n;
    $aux = array_keys($arr, $toSix, true);
    if ($aux !== []) {
        $auxFlip = array_flip($aux);
        return array_intersect_key($arr, $auxFlip);
    }

    return "not found";
}

$arr = [1, 8, 13, 11, 1, 3, -2, -6, 5];

echo nl2br("\n") . "N = 5: ";
print_r(sumTo6($arr, 5));

echo nl2br("\n") . "N = 2: ";
print_r(sumTo6($arr, 2));

echo nl2br("\n") . "N = 1: ";
print_r(sumTo6($arr, 1));

echo nl2br("\n") . "N = -5: ";
print_r(sumTo6($arr, -5));

echo nl2br("\n") . "N = 12: ";
print_r(sumTo6($arr, 12));
