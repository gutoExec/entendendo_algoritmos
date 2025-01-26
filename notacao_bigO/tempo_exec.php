<?php

$lugar_para_pousar = 1000000000;

$pesquisa_binaria = log($lugar_para_pousar) / log(2);

echo intval($pesquisa_binaria) + 1 . 'ms';