<?php

// Carrega automaticamente todas as classes definidas no projeto
// conforme o autoload configurado no arquivo composer.json.
// Isso elimina a necessidade de usar vários "require" manuais.
require_once 'vendor/autoload.php';

// Importa a classe "Search" do namespace "ProjetoDigitalCep".
// Assim, podemos instanciá-la sem precisar usar o nome completo do namespace.
use ProjetoDigitalCep\Search;

// Cria uma nova instância da classe Search, responsável por buscar o CEP.
$busca = new Search();

// Chama o método "getAddressFromZipcode" informando um CEP de exemplo.
// O CEP pode ser informado com ou sem o hífen.
$resultado = $busca->getAddressFromZipcode('01001-000');

// Exibe o resultado retornado pela API ViaCEP.
// O retorno é um array associativo contendo as informações do endereço.
print_r($resultado);
