<?php
    require_once 'conexao.php';

    if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha']) || empty($_POST['telefone']) || empty($_POST['dataNascimento'])){
        header("Location: formulario.php?error=faltando_dados&nome=".$_POST['nome']."&email=".$_POST['email']."&senha=".$_POST['senha']."&telefone=".$_POST['telefone']."&dataNascimento=".$_POST['dataNascimento']);
        exit;
    }else{
        cadastra_usuario( $_POST['email'],$_POST['nome'], $_POST['senha'], $_POST['telefone'], $_POST['dataNascimento']);
        header("Location: formulario.php?error=cadastro_realizado");
    }

?>