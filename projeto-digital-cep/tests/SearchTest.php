<?php

use PHPUnit\Framework\TestCase;
use ProjetoDigitalCep\Search;

class SearchTest extends TestCase {
  public function testGetAddressFromZipcode() {

    // Instancia a classe Search
    $resultado = new Search;

    // Faz a consulta real para o ViaCEP
    $resultado = $resultado->getAddressFromZipcode('03624010');

    // Array esperado com apenas os campos reais para este CEP
    $esperado = [
      "cep"         => "03624-010",
      "logradouro"  => "Rua Luís Asson",
      "complemento" => "",
      "bairro"      => "Vila Buenos Aires",
      "localidade"  => "São Paulo",
      "uf"          => "SP",
    ];

    // Verifica apenas esses campos específicos
    foreach ($esperado as $campo => $valor) {
      $this->assertEquals($valor, $resultado[$campo]);
    }
  }

  
}
