<?php 
    if(!isset($_POST['nome']) || !isset($_POST['email']) || !isset($_POST['senha']) || !isset($_POST['telefone']) || !isset($_POST['dataNascimento'])){
        header("Location: Cadastro.php?error=faltando_dados");
        echo "<script> alert('Faltando dados'); </script>";
        exit;
    }
    if (strlen( $_POST['nome'])<10 || strlen( $_POST['nome'])>50){
        echo "<script> alert('nome deve ter mais que 3 caracteres'); </script>";
        header("Location: Cadastro.php?nome=".$_POST['nome']."&email=".$_POST['email']."&senha=".$POST['senha']."&telefone=".$_POST['telefone']."&dataNascimento=".$_POST['dataNascimento'] );
        exit;
    }
    if (strlen( $_POST['email'])<15 ){
        echo "<script> alert('email inválido'); </script>";
        header("Location: Cadastro.php?nome=".$_POST['nome']."&email=".$_POST['email']."&senha=".$POST['senha']."&telefone=".$_POST['telefone']."&dataNascimento=".$_POST['dataNascimento'] );
        exit;
    }
    if (strlen( $_POST['senha'])<1 || strlen($_POST['senha'])>5 ){
        echo "<script> alert('senha deve ter no máximo 5 caracteres'); </script>";
        header("Location: Cadastro.php?nome=".$_POST['nome']."&email=".$_POST['email']."&senha=".$POST['senha']."&telefone=".$_POST['telefone']."&dataNascimento=".$_POST['dataNascimento'] );
        exit;
    }
    if (strlen( $_POST['telefone'])!=10 ){
        echo "<script> alert('telefone inválido'); </script>";
        header("Location: Cadastro.php?nome=".$_POST['nome']."&email=".$_POST['email']."&senha=".$POST['senha']."&telefone=".$_POST['telefone']."&dataNascimento=".$_POST['dataNascimento'] );
        exit;
    }
    $dataHoje = date('Y-m-d');
    if (strlen( strtotime($_POST['dataNasciemnto']))!=10 >= strtotime($dataHoje) ){
        echo "<script> alert('data muito recente'); </script>";
        header("Location: Cadastro.php?nome=".$_POST['nome']."&email=".$_POST['email']."&senha=".$POST['senha']."&telefone=".$_POST['telefone']."&dataNascimento=".$_POST['dataNascimento'] );
        exit;
    }

    require_once "Conexao.php";

    cadastra_usuario($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['telefone'], $_POST['dataNascimento']);
    header("Location: Login.php?");


?>