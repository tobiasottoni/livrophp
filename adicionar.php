<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $query = "INSERT INTO contatos (nome, telefone, email) VALUES ('$nome', '$telefone', '$email')";
    $resultado = mysqli_query($conexao, $query);

    if ($resultado) {
        header("Location: index.php");
        exit();
    } else {
        $erro = "Erro ao adicionar contato: " . mysqli_error($conexao);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Adicionar Contato</title>
</head>
<body>

<h1>Adicionar Contato</h1>

<form action="" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" name="telefone">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email">

    <input type="submit" value="Adicionar">
</form>

<a href="index.php">Voltar para a Lista de Contatos</a>

<?php if (isset($erro)): ?>
    <p style="color: red;"><?php echo $erro; ?></p>
<?php endif; ?>

</body>
</html>
