<?php

$inicio_ms = microtime(true);

$agenda = [
    'Emerson' => '4002-8922',
    'Ana Maria' => '5003-8933',
    'Elias' => '3344-0909'
];

function pegar_tel($agenda, $nome) {
    if ($nome) {
        return $agenda[$nome];
    }

    if (!$nome) {
        echo "Esse nome não existe na agenda, portando sem telefone :( \n";
    }
}

$resultado = pegar_tel($agenda, 'Emerson');

$fim_ms = microtime(true);

$ms = ($fim_ms - $inicio_ms) * 1000;

echo $resultado . PHP_EOL . 'Tempo de execução ' . $ms;

// ente 6 a 8 ms