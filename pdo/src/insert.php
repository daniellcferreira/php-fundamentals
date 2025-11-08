<?php

declare(strict_types=1); // Garante que os tipos declarados nas funções sejam verificados estritamente

$pdo = require 'connect.php'; // Inclui o arquivo de conexão com o banco de dados
$sql = 'INSERT INTO produtos (descricao) VALUES (?)'; // Define a consulta SQL para inserir um novo produto

$prepare = $pdo->prepare($sql); // Prepara a consulta SQL para execução

$prepare->bindParam(1, $_GET['descricao']); // Vincula o valor do parâmetro à consulta SQL
$prepare->execute(); // Executa a consulta SQL preparada

echo "Produto inserido com sucesso!"; // Exibe uma mensagem de sucesso
echo $prepare->rowCount() . " linha(s) afetada(s)."; // Exibe o número de linhas afetadas pela inserção