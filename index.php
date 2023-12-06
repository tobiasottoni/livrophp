<?php
include 'conexao.php';

$query = "SELECT * FROM contatos";
$resultado = mysqli_query($conexao, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Agenda de Contatos</title>
</head>
<body>

<h1>Agenda de Contatos</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php while ($contato = mysqli_fetch_assoc($resultado)): ?>
        <tr>
            <td><?php echo $contato['id']; ?></td>
            <td><?php echo $contato['nome']; ?></td>
            <td><?php echo $contato['telefone']; ?></td>
            <td><?php echo $contato['email']; ?></td>
            <td>
                <a href="editar.php?id=<?php echo $contato['id']; ?>">Editar</a>
                <a href="excluir.php?id=<?php echo $contato['id']; ?>" onclick="return confirm('Deseja realmente excluir este contato?')">Excluir</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

<a href="adicionar.php">Adicionar Novo Contato</a>

</body>
</html>
