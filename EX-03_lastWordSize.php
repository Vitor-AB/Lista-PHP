<?php

// – Escreva uma função que retorne à quantidade de caracteres da última palavra em uma frase

function lastWordQuant(string $frase): int
{
    $frase = rtrim($frase, ".");
    $str = explode(" ", $frase);
    return mb_strlen(array_pop($str));
}

$frase = "Estou praticando exercícios";
$frase1 = "Tudo o que um sonho precisa para ser realizado é alguém que acredite que ele possa ser realizado.";
$frase2 = "Imagine uma nova história para sua vida e acredite nela.";
$frase3 = "A amizade desenvolve a felicidade e reduz o sofrimento, duplicando a nossa alegria e dividindo a nossa dor.";
$frase4 = "ação";
$arr = [$frase, $frase1, $frase2, $frase3, $frase4];

foreach ($arr as $fras) {
    echo "Letras na ultima palavra: " . lastWordQuant($fras) . nl2br("\n");
}
