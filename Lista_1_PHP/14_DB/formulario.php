<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <?php 
        if (isset($_GET['error']) && $_GET['error'] === 'faltando_dados') {
            echo "<script>alert('Preencha todos os campos!');</script>";
        }

        if (isset($_GET['error']) && $_GET['error'] === 'cadastro_realizado') {
            echo "<script>alert('Cadastro realizado com sucesso!');</script>";
        }
    ?>
</head>
<body>
    <form action="formularioProcesso.php" method="POST">
       
        <label for="nome">Nome: </label>
        <input class="input" type="text" id="nome" name="nome"  value="<?php $nome = isset($_GET['nome'])?$_GET['nome']:"" ;echo $nome ?>" ><br></br>

        <label for="email">Email: </label>
        <input class="input" type="text" id="email" name="email" value="<?php $email = isset($_GET     ['email'])?$_GET['email']:"" ;echo $email ?>" ><br></br>

        <label for="senha">Senha: </label>
        <input class="input" type="text" id="senha" name="senha" value="<?php $senha = isset($_GET['senha'])?$_GET['senha']:"" ;echo $senha ?>"><br></br>

        <label for="telefone">Telefone: </label>
        <input class="input" type="text" id="telefone" name="telefone" value="<?php $telefone = isset($_GET['telefone'])?$_GET['telefone']:"" ;echo $telefone ?>"><br></br>

        <label for="dataNascimento">Data de Nascimento: </label>
        <input class="input" type="date" id="dataNascimento" name="dataNascimento" value="<?php $dataNascimento = isset($_GET['dataNascimento'])?$_GET['dataNascimento']:"" ;echo $dataNascimento ?>" ><br></br>

        <input type="submit" id="button" value="Cadastrar">
    </form>

</body>
</html>