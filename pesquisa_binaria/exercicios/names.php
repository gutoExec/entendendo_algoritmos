<?php

// quantas etapas levariam para encontrar o nome desejado em uma lista de 128 nomes (com pesquisa binária)

$count_nomes = 128;

$pesquisa_binaria = log($count_names) / log(2);

echo ($pesquisa_binaria) + 1;

// 7 etapas