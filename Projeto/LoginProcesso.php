<?php 
    if(isset($_POST['email']) || isset($_POST['senha'])){
        header("Location: Cadastro.php?error=faltando_dados");
    }

    require_once "Conexao.php";

    select_usuario($_POST['email'], $_POST['senha']);
    header("Location: ListaCadastro.php?");


?>