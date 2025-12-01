<?php
require_once ("Conexao.php");
$usuarios = select_usuarios();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários</title>
    
    <link rel="stylesheet" href="ListaCadastro.css">
</head>

<body>    
    
<?php require_once ("menu.php"); ?>

<div class="container">
    <h1>Lista de usuários</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Data Nascimento</th>
            <th>Editar Cadastro</th>
            <th>Excluir Cadastro</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?php echo htmlspecialchars($usuario['id']) ?></td>
                <td><?php echo htmlspecialchars($usuario['nome']) ?></td>
                <td><?php echo htmlspecialchars($usuario['email']) ?></td>
                <td><?php echo htmlspecialchars($usuario['telefone']) ?></td>
                <td><?php echo htmlspecialchars($usuario['dataNascimento']) ?></td>
                <td>
                    <a href="EditarCadastro.php?id=<?php echo $usuario['id']; ?>">Editar</a>
                </td>
                <td>
                    <a href="ExcluirCadastro.php?id=<?php echo $usuario['id']; ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>