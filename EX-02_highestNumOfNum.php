<?php
// - Escreva uma função que encontre o elemento que aparece mais vezes em um array

function highestNumOfNum(array $arr): int
{
    $maior = 0;
    $maiorkey = 0;
    $countValues = array_count_values($arr);
    foreach ($countValues as $key => $value) {
        if ($value > $maior) {
            $maior = $value;
            $maiorkey = $key;
        }
    }
    return $maiorkey;
}

$arr = [1, 2, 5, 4, 6, 1, 3, 36, 5, 5, 4, 1, 3, 5, 5, 1, 2, 3, 3, 2, 1, 5, 5, 4, 56, 51];
echo "Maior numero de numeros: " . highestNumOfNum($arr);

echo nl2br("\n");

$arr1 = [2, 5, 4, 6, 36, 4, 1, 3, 1, 2, 3, 3, 2, 1, 5, 5, 4, 56, 51];
echo "Maior numero de numeros: " .  highestNumOfNum($arr1);
