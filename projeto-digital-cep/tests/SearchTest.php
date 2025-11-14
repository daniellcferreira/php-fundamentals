<?php

use PHPUnit\Framework\TestCase;
use ProjetoDigitalCep\Search;

class SearchTest extends TestCase {

  /**
   * @dataProvider dadosTeste
   */
  public function testGetAddressFromZipcode(string $input, array $esperado) {

    $search = new Search;
    $resultado = $search->getAddressFromZipcode($input);

    // Compara apenas as chaves fornecidas em $esperado
    $this->assertEquals($esperado, array_intersect_key($resultado, $esperado));
  }

  public static function dadosTeste() {
    return [
      [
        "03624010",
        [
          "cep" => "03624-010",
          "logradouro" => "Rua Luís Asson",
          "complemento" => "",
          "bairro" => "Vila Buenos Aires",
          "localidade" => "São Paulo",
          "uf" => "SP",
          "unidade" => "",
          "ibge" => "3550308",
          "gia" => "1004"
        ]
      ],
      [
        "01001000",
        [
          "cep" => "01001-000",
          "logradouro" => "Praça da Sé",
          "complemento" => "lado ímpar",
          "bairro" => "Sé",
          "localidade" => "São Paulo",
          "uf" => "SP",
          "unidade" => "",
          "ibge" => "3550308",
          "gia" => "1004"
        ]
      ]
    ];
  }

}
