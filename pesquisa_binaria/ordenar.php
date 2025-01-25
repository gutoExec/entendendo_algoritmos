<?php

// para uma pesquisa binária funcionar, é necessario ordenar sua lista, pois imagine usar a pesquisa binária na sua lista de nomes e não estiver em ordem alfabética?

$nomes = [
    'Ana',
    'Carlos',
    'Cesar',
    'Geovanna',
    'Alef',
    'Jackson',
    'Igor',
    'Emerson',
    'João'
];

sort($nomes); // ordenar uma lista por ordem alfabética (Crescente)

print_r($nomes);