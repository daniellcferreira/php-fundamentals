<?php
// Exemplo de pilha de exceções em PHP

function f1() {
  echo "F1 está antes da exceção\n";
}

function f2($int) {
  if (!is_int($int)) {
    throw new Exception("O argumento deve ser um inteiro");
  } else {
    echo "F2 está na exceção\n";
  }

  f3();
}

function f3() {
  echo "F3 está depois da exceção";
}

f1();
f2(int: 5.5);
