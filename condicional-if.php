<?php
  // Exemplo de condicional if em PHP

  $variavel = true;
  $variavel2 = true;
  $variavel3 = false;

  if ($variavel == $variavel2) {
    echo "As variáveis são iguais!\n";
  }

  if ($variavel == $variavel2 && 10 > 5) {
    echo "As variáveis são iguais e 10 é maior que 5!";
  }
?>