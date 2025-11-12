<?php

class Database
{
  public function select(int $limit): array
  {
    try {
      // Corrigido: usar DATABASE_PATH e json_decode()
      $users = json_decode(file_get_contents(DATABASE_PATH), true);
      $users = array_slice($users, 0, $limit); 
      return $users;
    } catch (Exception $e) {
      throw new Exception("Error fetching users: " . $e->getMessage());
    }
  }
}
