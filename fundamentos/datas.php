<?php
// Exemplo de datas e horas em PHP

echo date("d") . "\n";  // Dia
echo date("m") . "\n";  // Mês
echo date("Y") . "\n";  // Ano
echo date("d-m-Y") . "\n";  // Data completa

// Exemplo de horas
echo date("H:i:s") . "\n";  // Hora atual padrão

date_default_timezone_set("America/Sao_Paulo");
echo date("H:i:s") . "\n";  // Hora com fuso horário de São Paulo

?>