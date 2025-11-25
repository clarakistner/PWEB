<?php 
    if(isset($_POST['nome']) || isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['telefone']) || isset($_POST['dataNascimento'])){
        header("Location: Cadastro.php?error=faltando_dados");
    }

    require_once "Conexao.php";

    cadastra_usuario($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['telefone'], $_POST['dataNascimento']);
    header("Location: Login.php?");


?>