<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="Cadastro.css">
</head>
<body>
    <header>
        <h1>Cadastro</h1>
    </header>
    <div class="container">
    
    <form action="CadastroProcesso.php" method="POST">
       
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome"  value="<?php $nome = isset($_GET['nome'])?$_GET['nome']:"" ;echo $nome ?>" ><br></br>

        <label for="email">Email: </label>
        <input type="text" id="email" name="email" value="<?php $email = isset($_GET['email'])?$_GET['email']:"" ;echo $email ?>" ><br></br>

        <label for="senha">Senha: </label>
        <input type="text" id="senha" name="senha" value="<?php $senha = isset($_GET['senha'])?$_GET['senha']:"" ;echo $senha ?>"><br></br>

        <label for="telefone">Telefone: </label>
        <input type="text" id="telefone" name="telefone" value="<?php $telefone = isset($_GET['telefone'])?$_GET['telefone']:"" ;echo $telefone ?>"><br></br>

        <label for="dataNascimento">Data de Nascimento: </label>
        <input type="date" id="dataNascimento" name="dataNascimento" value="<?php $dataNascimento = isset($_GET['dataNascimento'])?$_GET['dataNascimento']:"" ;echo $dataNascimento ?>" ><br></br>

        <input type="submit" value="Cadastrar">
    </form>
    </div>
</body>
</html>