<?php

class Pedido
{
    public string $item;
    public int $qtd;

    // construtor para inicializar as props
    public function __construct(string $item, string $qtd)
    {
        $this->item = $item;
        $this->qtd = $qtd;
    }

    // método para mostrar
    public function list()
    {
        echo ("Item: $this->item || Quantidade: $this->qtd \n");
    }
}

$pedido_1 = new Pedido('Batata Frita', 3);
$pedido_2 = new Pedido('Coca Cola 1L', 2);

$pedido_1->list();
$pedido_2->list();
