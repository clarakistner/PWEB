<?php

    require_once ("Conexao.php");

    if (empty($_POST["nome"]) || empty($_POST["email"]) || empty($_POST["telefone"])) {
        header("Location: EditarCadastro.php?id=" . $_POST['id'] . "&error=faltando_dados");
        exit;
    }

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $id = $_POST["id"];
    error_log("id recebido: ".$id);

    if (strlen( $_POST['nome'])<10 || strlen( $_POST['nome'])>50){
         header("Location: EditarCadastro.php?id=" . $_POST['id'] . "&error=nome_invalido");
        exit;
    }
    if (strlen( $_POST['email'])<15 ){
        header("Location: EditarCadastro.php?id=".$_POST['id']."&error=email_invalido");
        exit;
    }
    if (strlen(trim($_POST['telefone'])) != 10){
        header("Location: EditarCadastro.php?id=".$_POST['id']."&error=telefone_invalido");
        exit;
    }
    
    update_usuario($id, $email, $nome, $telefone);
    header("Location: ListaCadastro.php?");
    exit;



?>