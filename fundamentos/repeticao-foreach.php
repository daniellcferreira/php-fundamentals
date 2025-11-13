<?php

// Exemplo de laços de repetição 'foreach' em PHP
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$qtd_elementos = count($arr);

for ($i = 0; $i < $qtd_elementos; $i++) {
  echo "Elemento atual: " . $arr[$i] . "\n";
}

foreach ($arr as $elemento) {
  echo "Elemento atual: " . $elemento . "\n";
}