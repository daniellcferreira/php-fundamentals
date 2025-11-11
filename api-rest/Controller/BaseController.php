<?php

class BaseController
{
  // Função para lidar com chamadas de métodos inexistentes
  public function __call($name, $arguments)
  {
    $this->sendOutput("", array('HTTP/1.1 404 Not Found')); // Retorna um erro 404
  }

  // Função para obter parâmetros de string de consulta
  protected function getStringParams(): array
  {
    parse_str($_SERVER['QUERY_STRING'], $query); // Analisa a string de consulta da URL
    return $query;
  }

  // Função para enviar a saída HTTP
  protected function sendOutput($data, $httpHeaders = array())
  {
    header_remove('Set-Cookie'); // Remove cookies existentes

    if (is_array($httpHeaders) && count($httpHeaders)) {  // Verifica se há cabeçalhos HTTP para enviar
      foreach ($httpHeaders as $header) {
        header($header);
      }
    }

    echo $data;  // Envia os dados de saída
    exit;        // Encerra a execução do script
  }
}