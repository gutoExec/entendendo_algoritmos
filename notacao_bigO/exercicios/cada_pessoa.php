<?php

$inicio = microtime(true);

$agenda = [
    'Emerson' => '4002-8922',
    'Ana Maria' => '5003-8933',
    'Elias' => '3344-0909'
];

// na agenda para cada nome e valor eu vou mostrar
foreach ($agenda as $nome => $tel) {
    echo "$nome - Telefone: $tel \n";
}

$fim = microtime(true);

$ms = ($fim - $inicio) * 1000;

echo $ms . PHP_EOL; // aproximadamente 4 a 7 ms