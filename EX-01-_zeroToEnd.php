<?php
// – Escreva uma função que coloque todos os zeros de um array no final

function zeroToEnd(array $arr): array|string
{
    if (in_array(0, $arr, true)) {
        foreach ($arr as $key => $value) {
            if ($value === 0) {
                unset($arr[$key]);
                array_push($arr, 0);
            }
        }
        $arrReturn = array_values($arr);
        return $arrReturn;
    }
    return "O array usado não possui 0s";
}


echo nl2br("Array com 0s: \n");
$arr = [2, 5, 4, 8, 1, 3, 58, 8, 0, 2, 5, 4, 6, 0, 5, 2, 0, 0, 5, 64, 68, 25, 0, 5, 68];
print_r(zeroToEnd($arr));
echo nl2br("\n");
$arr2 = [1, 2, 0, 0, 5, 0, 0, 0, 2, 6, 0, 44, 5, 0, 0, 0];
print_r(zeroToEnd($arr2));

echo nl2br("\n\n");

echo nl2br("Array sem 0s: \n");
$arr1 = [2, 5, 4, 8, 1, 3, 58, 8, 2, 5, 4, 6,  5, 2,  5, 64, 68, 25,  5, 68];
print_r($arr1);
echo nl2br("\n");
print_r(zeroToEnd($arr1));
