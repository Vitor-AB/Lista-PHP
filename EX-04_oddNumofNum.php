<?php

// – Escreva uma função que retorne o número que aparece o número ímpar de vezes em um array

function oddNumOfNumInArray(array $arr): int|string
{
    $countValues = array_count_values($arr);
    foreach ($countValues as $key => $value) {
        if ($value % 2 !== 0) {
            return $key;
        }
    }
    return "Não possui numero com quantidade impar!";
}

$arr = [4, 5, 4, 5, 2, 3, 3, 2, 4, 4];
$arr1 = [4, 1, 3, 2, 4, 4, 5, 2, 1, 3];
$arr2 = [9, 9, 1, 4, 9, 1, 9, 2, 9, 6];
$arr3 = [3, 6, 4, 6, 5, 6, 7, 1, 5, 9];
$arr4 = [6, 2, 1, 9, 6, 10, 8, 1, 9, 6];
$arr5 = [7, 7, 4, 1, 5];

$Arr = [$arr, $arr1, $arr2, $arr3, $arr4, $arr5];


foreach ($Arr as $key => $value) {
    echo "Array " . $key + 1 . " : " .  oddNumOfNumInArray($value) . nl2br("\n");
}
