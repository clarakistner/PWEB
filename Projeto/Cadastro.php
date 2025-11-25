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
        <input type="text" id="nome" name="nome"><br></br>

        <label for="email">Email: </label>
        <input type="text" id="email" name="email" ><br></br>

        <label for="senha">Senha: </label>
        <input type="text" id="senha" name="senha" ><br></br>

        <label for="telefone">Telefone: </label>
        <input type="text" id="telefone" name="telefone" ><br></br>

        <label for="dataNascimento">Data de Nascimento: </label>
        <input type="date" id="dataNascimento" name="dataNascimento" ><br></br>

        <input type="submit" value="Cadastrar">
    </form>
    </div>
</body>
</html>