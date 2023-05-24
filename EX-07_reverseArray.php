<?php

// - Escreva uma função que inverta as posições dos elementos dentro de um array

function reverseArray(array $arr): array
{
    $arrSize = count($arr);
    for ($i = 0; $i < $arrSize; $i++) {
        $revArr[$i] = array_pop($arr);
        // echo nl2br("\n");
        // print_r($revArr);
    }
    return $revArr;
}

function reverseArrayRecursive(array $arr, array $revArr = []): array
{
    if (count($arr) === 0) {
        return $revArr;
    }
    array_push($revArr, array_pop($arr));
    return reverseArrayRecursive($arr, $revArr);
}



$arr = [5, 3, 1, 15];
$arr1 = [5, 1, 3, 58, 8, 4, 3, 1, 2, 3, 5, 1, 2, 5, 6, 4, 8, 65, 9, 4, 7, 1, 3, 7, 3];
$arr2 = [5, 1, 3, 58, 8, 4, 3, 1, 2, 3, 5, 1, 2, 9, 10, 7, 1, 3, 7, 3];
$arr3 = [5, 1, 3, 58, 83, 5, 1, 2, 5, 6, 4, 8, 65, 9, 7, 7, 1, 3, 7, 3];
$arr4 = [5, 1, 3, 58, 85, 9, 47, 7, 1, 3, 7, 3];

echo "Não Recursivo: " . nl2br("\n");
print_r(reverseArray($arr));
echo nl2br("\n");
print_r(reverseArray($arr1));
echo nl2br("\n");
print_r(reverseArray($arr2));
echo nl2br("\n");
print_r(reverseArray($arr3));
echo nl2br("\n");
print_r(reverseArray($arr4));

echo nl2br("\n");
echo nl2br("\n");

echo "Recursivo: " . nl2br("\n");
print_r(reverseArrayRecursive($arr));
echo nl2br("\n");
print_r(reverseArrayRecursive($arr1));
echo nl2br("\n");
print_r(reverseArrayRecursive($arr2));
echo nl2br("\n");
print_r(reverseArrayRecursive($arr3));
echo nl2br("\n");
print_r(reverseArrayRecursive($arr4));