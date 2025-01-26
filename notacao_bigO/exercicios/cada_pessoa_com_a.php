<?php

$inicio_ms = microtime(true);

$agenda = [
    'Emerson' => '4002-8922',
    'Ana Maria' => '5003-8933',
    'Elias' => '3344-0909'
];

foreach ($agenda as $nome => $tel) {
    // se em $nome o A estiver no indice 0, retorna
    if (strpos($nome, 'A') === 0) {
        echo "$nome - Telefone: $tel \n";
    }
}

$fim_ms = microtime(true);

$ms = ($fim_ms - $inicio_ms) * 1000;

echo 'Tempo de execução ' .  $ms;

// aproximadamente 7 a 17 ms