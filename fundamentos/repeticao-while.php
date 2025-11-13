<?php

// Exemplo de laços de repetição 'while' em PHP

$frutas = ["maçã", "banana", "laranja", "uva", "pera"];

$contador = count($frutas);

$i = 0;

while ($i < $contador) {
  echo "Fruta atual: " . $frutas[$i] . "\n";
  $i++;
}