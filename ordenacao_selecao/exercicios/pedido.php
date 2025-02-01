<?php

$inicio = microtime(true);

// adicionando os pedidos
function addPedidos($lista_pedidos, ...$pedido) {
    foreach ($pedido as $pd) {
        $lista_pedidos[] = $pd;
    }

    return $lista_pedidos;
}

$lista_pedidos = [];

$lista_pedidos = addPedidos($lista_pedidos, 'Batata Frita', 'Coca-Cola', 'Hamburguer');

print_r($lista_pedidos);


// fechando os pedidos
$feito = $lista_pedidos;

$fechando_pedido = array_slice($lista_pedidos, count($feito));

print_r($fechando_pedido);

$fim = microtime(true);

echo ($fim - $inicio) * 100 . 'ms'; // 0 a 1ms