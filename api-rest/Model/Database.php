<?php

class Database
{
  // Retorna um array com os primeiros $limit registros do "banco de dados"
  public function select(int $limit): array
  {
    try {
      $users = json_encode(file_get_contents(DATABASE_PATH), true); // Lê o conteúdo do arquivo JSON
      $users = array_slice($users, 0, $limit); // Retorna apenas os primeiros $limit registros
      return $users; // Retorna o array de usuários
    } catch (Exception $e) {
      throw new Exception("Error fetching users: " . $e->getMessage());
    }
    return false;  // Retorna false se ocorrer um erro
  }
}