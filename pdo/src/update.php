<?php

declare(strict_types=1); // Garante que os tipos declarados nas funções sejam verificados estritamente

$pdo = require 'connect.php'; // Inclui o arquivo de conexão com o banco de dados
$sql = 'UPDATE produtos SET descricao = ? WHERE id = ?'; // Define a consulta SQL para atualizar um produto

$prepare = $pdo->prepare($sql); // Prepara a consulta SQL para execução

$prepare->bindParam(1, $_GET['descricao']); // Vincula o valor do parâmetro 'descricao' à consulta SQL
$prepare->bindParam(2, $_GET['id']); // Vincula o valor do parâmetro 'id' à consulta SQL

$prepare->execute(); // Executa a consulta SQL preparada

echo "Produto atualizado com sucesso!"; // Exibe uma mensagem de sucesso
echo $prepare->rowCount() . " linha(s) afetada(s)."; // Exibe o número de linhas afetadas pela atualização