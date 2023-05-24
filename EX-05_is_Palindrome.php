<?php

// - Escreva uma função que retorne true caso uma palavra seja um palíndromo.

function is_Palindrome(string $str): bool
{
    $strNoSpace = str_replace(" ", "", $str);
    $strRev = strrev($strNoSpace);

    if ($strNoSpace === $strRev) {
        return true;
    }
    return false;
}


$str = "osso";
$str1 = "aibofobia";
$str2 = "a base do teto desaba";
$str3 = "não é palindromo";
$str4 = "anotaram a data da maratona";
$str5 = "o teu dueto";

$strs = [$str, $str1, $str2, $str3, $str4, $str5];

foreach ($strs as $key => $value) {
    echo nl2br("\n") . "String" . $key + 1 . ": " . (is_Palindrome($value) ? 'true' : 'false') . nl2br("\n");
}
