<?php
// Exemplo de operadores lógicos e de comparação em PHP

// Diferença entre '&&' e 'and'
$bool = true && false;  // '&&' tem maior precedência que '='
var_dump($bool);

$bool = true and false; // 'and' tem menor precedência que '='
var_dump($bool);

$bool = (true and false); // Alterando precedência com parênteses
var_dump($bool);

$bool = (true && false);
var_dump($bool);

// Operadores de comparação
var_dump(7 == 7);   // Igualdade
var_dump(7 != 7);   // Diferença
var_dump(7 < 10);   // Menor que
var_dump(7 > 10);   // Maior que
var_dump(7 <= 10);  // Menor ou igual que
var_dump(7 >= 10);  // Maior ou igual que

?>