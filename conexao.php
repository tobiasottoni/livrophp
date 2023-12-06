<?php
$servidor = "localhost";// Endereço do Banco de dados
$usuario = "root"; //Seu Usuário 
$senha = "";//Sua Senha
$banco = "agenda_livro"; //Sua Base de Dados;

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>

<?php

//Abaixo é o código para criar a tabela contatos

/*

CREATE TABLE contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    telefone VARCHAR(20),
    email VARCHAR(255)
);


*/

?>