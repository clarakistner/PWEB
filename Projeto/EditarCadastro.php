<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="EditarCadastroProcessamento.php" method="POST">
       
       <label for="nome">Nome: </label>
       <input type="text" id="nome" name="nome"  value="><?php echo htmlspecialchars($usuario['id'])?>  " ><br></br>

       <label for="email">Email: </label>
       <input type="text" id="email" name="email" value= ><br></br>

       <label for="senha">Senha: </label>
       <input type="text" id="senha" name="senha" ><br></br>

       <label for="telefone">Telefone: </label>
       <input type="text" id="telefone" name="telefone" ><br></br>

       <label for="dataNascimento">Data de Nascimento: </label>
       <input type="date" id="dataNascimento" name="dataNascimento" ><br></br>

       <input type="submit" value="Sair">
   </form>
</body>
</html>