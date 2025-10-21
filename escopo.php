<?php

  // Escopo de Variáveis

  $a = 10; // Variável global

  function soma() {
    global $a; // Tornando a variável global acessível dentro da função
    $x = $a + 40;
    return $x;
  }

  echo soma();

?>