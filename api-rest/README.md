# API REST em PHP

![PHP](https://img.shields.io/badge/PHP-Backend-777BB4?style=flat-square&logo=php)
![JSON](https://img.shields.io/badge/JSON-Estrutura%20de%20Dados-000000?style=flat-square&logo=json)
![XAMPP](https://img.shields.io/badge/XAMPP-Ambiente%20de%20Desenvolvimento-FB7A24?style=flat-square&logo=xampp)

## Descrição

Este projeto é uma API REST desenvolvida em PHP para fins educacionais.  
A aplicação utiliza um arquivo JSON como banco de dados e segue uma estrutura de camadas com controllers, models e configuração centralizada.  
O objetivo é demonstrar o funcionamento básico de rotas, controllers e respostas HTTP no desenvolvimento de APIs RESTful sem uso de frameworks.

## Funcionalidades

- Roteamento simples via `index.php` com validação de endpoints.
- Controlador base com tratamento de erros e respostas HTTP.
- Endpoint para listagem de usuários com limite configurável via query string.
- Simulação de acesso a banco de dados através de um arquivo JSON.
- Estrutura modular organizada em **Config**, **Controller** e **Model**.
