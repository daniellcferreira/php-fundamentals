<?php

require __DIR__ . "/Config/config.php";  // Inclui o arquivo de configuração

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);  // Obtém o caminho da URL
$uri = explode('/', $uri);  // Divide o caminho em partes

// Verifica se a URL está no formato correto /api/v1/...
if((isset($uri[1]) && $uri[1] != 'api') || (isset($uri[2]) && $uri[2] != 'v1')) {
    header("HTTP/1.1 404 Not Found");
    exit();
} else if((isset($uri[3]) && $uri[3] != 'user') || !isset($uri[4])) {
    header("HTTP/1.1 404 Not Found");
    exit();
}

require ROOT_PATH . "/Controller/UserController.php";  // Inclui o controlador de usuário

$userController = new UserController();  // Cria uma instância do controlador de usuário
$methodName = $uri[4] . "Action";  // Obtém o nome do método a ser chamado
$user->{$methodName}();  // Chama o método correspondente