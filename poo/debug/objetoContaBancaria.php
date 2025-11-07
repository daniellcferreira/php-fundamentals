<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria;

$conta = new ContaBancaria(
  'Banco Exemplo',
  'João Silva',
  '1234',
  '56789-0',
  1500.75
);

var_dump($conta->exibirDadosConta());