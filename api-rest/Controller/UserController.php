<?php

class UserController extends BaseController
{
  // Ação para listar usuários
  public function listAction()
  {
    $erroDescription = "";  // Inicializa a variável de descrição de erro
    $requestMethod = $_SERVER["REQUEST_METHOD"]; // Obtem o metodo de requisição
    $stringParamsArray = $this->getStringParams(); // Obtem os parâmetros de string de consulta

    // Verifica se o método de requisição é GET
    if(strtoupper($requestMethod) == 'GET') {
      try {
        $userModel = new UserModel();  // Instancia o modelo de usuário
        $intLimit = 10; // Define um limite padrão para o número de usuários a serem retornados

        // Verifica se o parâmetro 'limit' foi fornecido na string de consulta
        if (isset($stringParamsArray['limit']) && $stringParamsArray['limit']) {
          $intLimit = $stringParamsArray['limit']; // Atualiza o limite com o valor fornecido
        }

        $usersArray = $userModel->getUsers($intLimit);  // Obtém a lista de usuários do modelo
        $responseData = json_encode($usersArray);   // 
      } catch (Exception $e) {
        $erroDescription = $e->getMessage(). "Algo deu errado ao buscar os usuários.";  // Captura a mensagem de erro
        $errorHeader = 'HTTP/1.1 500 Internal Server Error'; // Define o cabeçalho de erro HTTP
      }
    } else {
      $erroDescription = "Metodo de requisição não suportado.";
      $errorHeader = 'HTTP/1.1 422 Unprocessable Entity';
    }

    // Envia a resposta HTTP
    if (!$erroDescription) {
      $this->sendOutput($responseData, array('HTTP/1.1 200 OK')); // Sucesso
    } else {
      $this->sendOutput(json_encode(array('error' => $erroDescription)), array('Content-Type: application/json',$errorHeader));
    }
  }


}