Projeto de Cadastro de Pessoas:

Este é um projeto de um site de cadastro de pessoas, implementado com funcionalidades de CRUD (Create, Read, Update, Delete). O projeto utiliza PHP, MySQL, HTML e o framework Bootstrap para a interface.

Funcionalidades

Cadastro de Pessoas: Permite adicionar novas pessoas ao sistema.

Listagem de Pessoas: Exibe uma lista de todas as pessoas cadastradas.

Atualização de Dados: Permite editar as informações de uma pessoa cadastrada.

Exclusão de Pessoas: Permite remover pessoas do sistema.
Tecnologias Utilizadas

Tecnologias Utilizadas

PHP: Linguagem de programação utilizada para a lógica do servidor.

MySQL: Banco de dados utilizado para armazenar as informações das pessoas.

HTML: Linguagem de marcação utilizada para estruturar as páginas web.

Bootstrap: Framework CSS utilizado para estilizar a interface do usuário.

Estrutura do Projeto
/projeto-cadastro-pessoas
│
├── /css
│   └── estilo.css
│
├── /js
│   └── script.js
│
├── /php
│   ├── conexao.php
│   ├── criar.php
│   ├── ler.php
│   ├── atualizar.php
│   └── deletar.php
│
├── index.html
└── README.md

Instalação
Clone o repositório para sua máquina local:
git clone https://github.com/seu-usuario/projeto-cadastro-pessoas.git

Navegue até o diretório do projeto:
cd projeto-cadastro-pessoas

Configure o banco de dados MySQL:
Crie um banco de dados chamado cadastro_pessoas.
Importe o arquivo cadastro_pessoas.sql para criar as tabelas necessárias.
Configure a conexão com o banco de dados no arquivo conexao.php:
PHP

<?php
$servername = "localhost";
$username = "seu-usuario";
$password = "sua-senha";
$dbname = "cadastro_pessoas";

// Cria a conexão

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>

Contribuição

Se você deseja contribuir com este projeto, siga os passos abaixo:

Faça um fork do repositório.

Crie uma nova branch com a sua feature: git checkout -b minha-feature.

Commit suas mudanças: git commit -m 'Adiciona minha feature'.

Faça um push para a branch: git push origin minha-feature.
Abra um Pull Request.

