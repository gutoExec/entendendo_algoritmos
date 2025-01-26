<?php

$inicio_ms = microtime(true);

$agenda_nomes = [
    '4002-8922' => 'Emerson',
    '4889-0092' => 'Eduardo',
    '1234-0923' => 'Elias',
    '7634-0912' => 'Geovanna'
];

function pegar_nome($agenda_nomes, $tel) {
    if ($tel) {
        return $agenda_nomes[$tel];
    }

    if (!$tel) {
        echo "Não existe usuário com esse telefone \n";
    }
}

$resultado = pegar_nome($agenda_nomes, '4002-8922');

$fim_ms = microtime(true);

$ms = ($fim_ms - $inicio_ms) * 1000;

echo $resultado . PHP_EOL . 'Tempo de execução ' . $ms;

// aproximadamente 6 a 8ms