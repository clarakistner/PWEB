<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="Cadastro.css?v=1">
</head>
<body>

    <?php
        if (isset($_GET['error'])) {
            switch ($_GET['error']) {
                case 'faltando_dados':
                    echo "<script>alert('Preencha todos os campos!');</script>";
                    break;

                case 'nome_invalido':
                    echo "<script>alert('O nome deve ter entre 10 e 50 caracteres.');</script>";
                    break;

                case 'email_invalido':
                    echo "<script>alert('O e-mail é inválido ou muito curto.');</script>";
                    break;

                case 'senha_invalido':
                    echo "<script>alert('A senha deve ter entre 1 e 5 caracteres.');</script>";
                    break;

                case 'telefone_invalido':
                    echo "<script>alert('O telefone deve ter exatamente 10 dígitos.');</script>";
                    break;

                case 'data_invalido':
                    echo "<script>alert('A data de nascimento não pode ser atual ou futura.');</script>";
                    break;
            }
        }
    ?>

    <?php require_once ("menu.php"); ?>

    <header>
        <h1>Cadastro</h1>
    </header>
    <div class="container">
    
    <form action="CadastroProcesso.php" method="POST">
       
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
    </div>
</body>
</html>