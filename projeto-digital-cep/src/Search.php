<?php

// Define o namespace da classe de acordo com o autoload do composer.json.
// Aqui, o namespace "ProjetoDigitalCep" deve estar mapeado para o diretório "src/".
namespace ProjetoDigitalCep;

// Define a classe responsável por buscar endereços a partir de um CEP.
class Search {

  // URL base da API ViaCEP, usada como ponto de partida para as requisições.
  private $url = "https://viacep.com.br/ws/";

  // Método público que recebe um CEP e retorna um array com os dados do endereço.
  public function getAddressFromZipcode(string $zipcode): array {

    // Remove todos os caracteres que não sejam números do CEP recebido.
    // Exemplo: "01001-000" -> "01001000"
    $zipcode = preg_replace('/[^0-9]/im', '', $zipcode);

    // Faz a requisição HTTP GET para a API ViaCEP.
    // A resposta é um JSON com os dados do endereço.
    $get = file_get_contents($this->url . $zipcode . "/json");
    
    // Converte o JSON retornado em um objeto PHP e, em seguida, para um array associativo.
    // Retorna o array final para quem chamou o método.
    return (array) json_decode($get);
  }
}
