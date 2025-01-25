<?php

$number = 100;

$log = log10($number); // basicamente diz: quantos 10 você precisa multiplicar para chegar a 100?

echo 'Logaritmo 1: ' . $log . PHP_EOL; // 2


$log2 = log(32) / log(2);

echo 'Logaritmo 2: ' . $log2 . PHP_EOL;

$log3 = log(2000) / log(2);

echo 'Logaritmo 3: ' . $log3 . PHP_EOL;

// logartimo, quando x é multiplicado por si mesmo  cerca de algumas vezes para obter o resultado, ou seja log(2000) na base 2 = 10... vezes, ou seja, 2 multiplicado por si meso 10... vezes vai dar o resultado 2000