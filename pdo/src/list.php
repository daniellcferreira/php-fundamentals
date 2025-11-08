<?php

declare(strict_types=1); // Garante que os tipos declarados nas funções sejam verificados estritamente

$pdo = require 'connect.php'; // Inclui o arquivo de conexão com o banco de dados
$sql = 'SELECT * FROM produtos'; // Define a consulta SQL para selecionar todos os produtos

echo "<h1>Lista de Produtos</h1>"; // Exibe o título da página

foreach ($pdo->qyery($sql) as $key => $value) {   // Itera sobre os resultados da consulta
  echo "Id: " . $value['id'] . "<br> Descrição: " . $value['descricao'] . "<hr>"; // Exibe o ID e a descrição de cada produto
}