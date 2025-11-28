<?php

    require_once ("Conexao.php");

    if (!isset($_POST["nome"]) || !isset($_POST["email"]) || !isset($_POST["telefone"])) {
        header("Location: EditarCadastro.php?error=faltando_dados");
        exit;
    }

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $id = $_POST["id"];
    error_log("id recebido: ".$id);
    
    update_usuario($id, $email, $nome, $telefone);
    header("Location: ListaCadastro.php?");
    exit;



?>