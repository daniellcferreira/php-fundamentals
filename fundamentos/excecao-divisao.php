<?php

// Exemplo de tratamento de exceção para divisão PHP

function divisao($dividendo, $divisor) {

  try {
    if ($divisor == 0) {
      throw new RangeException("Divisor não pode ser zero.");
    }

    $resultado = $dividendo / $divisor;
    echo "Resultado da divisão: " . $resultado . "\n";
    return $resultado;
  }catch (Exception $e){
    echo "Erro: " . $e->getMessage() . "\n";
  } finally {
    echo "Operação de divisão finalizada.\n";
  }
  
  
}

divisao(10, 0);