<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['username'])){
        echo "<p> Usuario logado: " .$_SESSION['username']. "</p>";
    }   else {
        header("Location:login.php?error=não_autenticado");
        exit();
    }

    if (isset($_GET['nome'])){
        $_SESSIOn['nome'] = $_GET['nome'];
        echo "<h2>Bem-vindo, " . $_SESSION['nome'] . "</h2>";
    }

       if (isset($_GET['error']) && $_GET['error'] == 'valores_indefinidos') {
             echo "<p style='color: red;'>Preencha todos os campos.</p>";
        }

        if (isset($_GET['error']) && $_GET['error'] == 'valores_invalidos'){
            echo "<p style='color: red;'>.Os valores são inválidos.</p>";
        }
        ?>

    <h2>Formulário de Cadastro</h2>
    <form action="imc.php" method="post">
       
        <label for="peso">Peso</label>
        <input type="number" id="peso" name="peso" step="0.01"><br></br>

        <label for="altura">Altura</label>
        <input type="number" id="altura" name="altura" step="0.01"><br></br>

        <input type="submit" value="Calcular">
    </form>

</body>
</html>