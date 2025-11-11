<?php
define("ROOT_PATH", __DIR__ . "/../");                 // Diretorio raiz do projeto
define("DATABASE_PATH", ROOT_PATH . "database.json");  // Caminho do arquivo de banco de dados

require_once ROOT_PATH . "/Controller/BaseController.php";  // Inclui o controlador base
require_once ROOT_PATH . "/Model/UserModel.php";            // Inclui o modelo base