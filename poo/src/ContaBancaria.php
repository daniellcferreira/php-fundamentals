<?php

declare(strict_types=1);

namespace App;

class ContaBancaria {

  public string $banco = "Banco Inter";
  public string $nomeTitular = "João Silva";
  public string $numeroAgencia = "8244";
  public string $numeroConta = "12345-6";
  public float $saldo = 0;

  public function exibirDadosConta(): array {
    return [
      'banco' => $this->banco,
      'nomeTitular' => $this->nomeTitular,
      'numeroAgencia' => $this->numeroAgencia,
      'numeroConta' => $this->numeroConta,
      'saldo' => $this->saldo,
    ];
  }

}

