<?php

function pesquisa_binaria($lista, $item) {
    $baixo = 0;
    $alto = count($lista) - 1;

    while ($baixo <= $alto) {
        $meio = intval(($baixo + $alto) / 2);
        $chute = $lista[$meio];

        if ($chute == $item) {
            return $meio;
        }

        if ($chute > $item) {
            $alto = $meio - 1;
        }

        if ($chute < $item) {
            $baixo = $meio + 1;
        }
    }

    return null;
}

$minha_lista = [
    'Augusto',
    'Geovanna',
    'Jackson',
    'João',
    'Emerson',
    'Girlene'
];

sort($minha_lista);

$resultado = pesquisa_binaria($minha_lista, 'Emerson');

echo $resultado;