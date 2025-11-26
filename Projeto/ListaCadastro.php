<?php
        require_once "Conexao.php";
        $usuarios = select_usuarios();
        require_once ("menu.php");
?>

<link rel="stylesheet" href="ListaCadastro.css">
<div class="container">
    <h1>Lista de usuários</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Data Nascimento</th>
        </tr>
        <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?php echo htmlspecialchars($usuario['id'])?></td>
            <td><?php echo htmlspecialchars($usuario['nome'])?></td>
            <td><?php echo htmlspecialchars($usuario['email'])?></td>
            <td><?php echo htmlspecialchars($usuario['telefone'])?></td>
            <td><?php echo htmlspecialchars($usuario['dataNascimento'])?></td>
            <td> <a href=EditarCadastro.php?id=<?php echo htmlspecialchars($usuario['id'])?> > Editar </a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>