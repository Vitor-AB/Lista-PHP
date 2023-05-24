<?php

// - Crie uma função que mascare números de um cartão de crédito.

function maskCreditCard(string|int|null $cardNum = ""): string|null
{
    if (is_null($cardNum) || $cardNum === "") {
        return null;
    }

    if (is_int($cardNum)) {
        $cardNum = (string) $cardNum;

        $aux = $cardNum[0];
        for ($i = 1; $i < strlen($cardNum); $i++) {
            if ($i % 4 === 0) {
                $aux .= " ";
            }
            $aux .= $cardNum[$i];
        }
        $cardNum = $aux;
    }
    if (strlen($cardNum) <= 6) {
        return $cardNum;
    }

    $maskedCard = $cardNum[0];

    for ($i = 1; $i < strlen($cardNum) - 4; $i++) {

        if ($cardNum[$i] === " ") {
            $maskedCard .= " ";
            continue;
        }
        $maskedCard .= "*";
    }
    $maskedCard .= " " . substr($cardNum, -4);

    return $maskedCard;
}

$card1  = "1234 5678 9123 4567";
$card2 = "3215 2";
$card3 = "1325 3548 3514 6131";
$card4 = null;
$card5 = "3132 6548 3125 6456";
$card6 =  1234_5678_9101_1121;

echo nl2br("\n") . "Cartao 1: " . maskCreditCard($card1);
echo nl2br("\n") . "Cartao 2: " . maskCreditCard($card2);
echo nl2br("\n") . "Cartao 3: " . maskCreditCard($card3);
echo nl2br("\n") . "Cartao 4: " . maskCreditCard($card4);
echo nl2br("\n") . "Cartao 5: " . maskCreditCard($card5);
echo nl2br("\n") . "Cartao 6: " . maskCreditCard($card6);
