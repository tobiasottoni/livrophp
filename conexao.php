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
