<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria;

$conta = new ContaBancaria(
  'Banco Exemplo',
  'João Silva',
  '1234',
  '56789-0',
  0
);

echo $conta->obterSaldo();
echo PHP_EOL;

echo $conta->depositar(1000);
echo PHP_EOL;

echo $conta->obterSaldo();
echo PHP_EOL;

echo $conta->sacar(250);
echo PHP_EOL;

echo $conta->obterSaldo();
echo PHP_EOL;