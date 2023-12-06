<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Verificar se o contato existe
    $verificarQuery = "SELECT * FROM contatos WHERE id=$id";
    $verificarResultado = mysqli_query($conexao, $verificarQuery);

    if (mysqli_num_rows($verificarResultado) > 0) {
        // Excluir o contato
        $excluirQuery = "DELETE FROM contatos WHERE id=$id";
        $excluirResultado = mysqli_query($conexao, $excluirQuery);

        if ($excluirResultado) {
            header("Location: index.php");
            exit();
        } else {
            $erro = "Erro ao excluir contato: " . mysqli_error($conexao);
        }
    } else {
        $erro = "Contato não encontrado.";
    }
} else {
    $erro = "ID do contato não fornecido.";
}
?>

