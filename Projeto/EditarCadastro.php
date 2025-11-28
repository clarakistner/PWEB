<?php
    require_once ("Conexao.php");
    $usuario = select_usuario($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro</title>
    <link rel="stylesheet" href="EditarCadastro.css?v=1">
</head>
<body>
<header>
        <h1>Edição de Cadastro</h1>
</header>
<div class="container">

<form action="EditarCadastroProcesso.php" method="POST">
       
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($usuario['id']) ?>">

       <label for="nome">Nome: </label>
       <input type="text" class="input" id="nome" name="nome"  value="<?php echo htmlspecialchars($usuario['nome'])?>  "><br></br>

       <label for="email">Email: </label>
       <input type="text" class="input" id="email" name="email"  value="<?php echo htmlspecialchars($usuario['email'])?>  "><br></br>

       <label for="telefone">Telefone: </label>
       <input type="text" class="input" id="telefone" name="telefone" value="<?php echo htmlspecialchars($usuario['telefone'])?>  "><br></br>  

        <input type="submit" id="button" value="Salvar">

   </form>
</div>
</body>
</html>