<?php

$inicio = microtime(true);

function add($compras, ...$items)
{
    foreach ($items as $item) {
        array_push($compras, $item); // adicionar elementos no array
    }

    return $compras;
}

$compras = [
    'Mercado',
    'Cinema',
    'Mensalidade Gympass'
];

$compras = add($compras, 'Parcela da Máquina de Lavar', 'Parcela do Notebook', 'Iphone 12');

print_r($compras);

$fim = microtime(true);

echo ($fim -  $inicio) * 100 . 'ms'; // 0 a 1ms