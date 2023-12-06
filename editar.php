<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $query = "UPDATE contatos SET nome='$nome', telefone='$telefone', email='$email' WHERE id=$id";
    $resultado = mysqli_query($conexao, $query);

    if ($resultado) {
        header("Location: index.php");
        exit();
    } else {
        $erro = "Erro ao editar contato: " . mysqli_error($conexao);
    }
} elseif (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM contatos WHERE id=$id";
    $resultado = mysqli_query($conexao, $query);
    $contato = mysqli_fetch_assoc($resultado);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Editar Contato</title>
</head>
<body>

<h1>Editar Contato</h1>

<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $contato['id']; ?>">
    
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="<?php echo $contato['nome']; ?>" required>

    <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" name="telefone" value="<?php echo $contato['telefone']; ?>">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $contato['email']; ?>">

    <input type="submit" value="Salvar Alterações">
</form>

<a href="index.php">Voltar para a Lista de Contatos</a>

<?php if (isset($erro)): ?>
    <p style="color: red;"><?php echo $erro; ?></p>
<?php endif; ?>

</body>
</html>
