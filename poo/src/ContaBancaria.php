<?php

declare(strict_types=1);

namespace App;

class ContaBancaria {

  private string $banco;
  private string $nomeTitular;
  private string $numeroAgencia;
  private string $numeroConta;
  private float $saldo;

  public function __construct(
    string $banco,
    string $nomeTitular,
    string $numeroAgencia,
    string $numeroConta,
    float $saldo
  ) {
    $this->banco = $banco;
    $this->nomeTitular = $nomeTitular;
    $this->numeroAgencia = $numeroAgencia;
    $this->numeroConta = $numeroConta;
    $this->saldo = $saldo;
  }

  public function exibirDadosConta(): array {
    return [
      'banco' => $this->banco,
      'nomeTitular' => $this->nomeTitular,
      'numeroAgencia' => $this->numeroAgencia,
      'numeroConta' => $this->numeroConta,
      'saldo' => $this->saldo,
    ];
  }

  public function depositar(float $valor): string {
    $this->saldo += $valor;
    return 'Depósito realizado: R$' . number_format($valor, 2, ',', '.');
  }

  public function sacar(float $valor): string {
    $this->saldo -= $valor;
    return 'Saque realizado: R$' . number_format($valor, 2, ',', '.');
  }

  public function obterSaldo(): string {
    return 'Saldo atual: R$' . number_format($this->saldo, 2, ',', '.');
  }

  public function getBanco(): string {
    return $this->banco;
  }

  public function getNomeTitular(): string {
    return $this->nomeTitular;
  }

  public function getNumeroAgencia(): string {
    return $this->numeroAgencia;
  }

  public function getNumeroConta(): string {
    return $this->numeroConta;
  }

  public function getSaldo(): float {
    return $this->saldo;
  }

}

