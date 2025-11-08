<?php 

declare(strict_types=1); // Garante que os tipos declarados nas funções sejam verificados estritamente

// Inicializa a variável $pdo como nula
$pdo = null;

try {
  // Cria uma nova conexão com o banco de dados MySQL usando PDO
  // Sintaxe: PDO('mysql:host=HOST;dbname=NOME_DO_BANCO', 'USUARIO', 'SENHA')
  $pdo = new PDO('mysql:host=mysql;dbname=exemplo', 'root', '12345');
} catch (Exception $e) {
  // Captura e exibe uma mensagem de erro caso a conexão falhe
  echo 'Erro ao conectar com o banco de dados: ' . $e->getMessage();
  die(); // Encerra a execução do script
}

// Retorna o objeto PDO para ser reutilizado em outros arquivos
return $pdo;
