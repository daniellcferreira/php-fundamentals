<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria;

$conta = new ContaBancaria();

$conta->setBanco("Banco do Brasil");
$conta->setNomeTitular("Maria Oliveira");
$conta->setNumeroAgencia("4321");
$conta->setNumeroConta("65432-1");
$conta->setSaldo(1500.75);

var_dump($conta->exibirDadosConta());