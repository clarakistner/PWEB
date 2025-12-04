<?php
session_start();

require_once("Conexao.php");
$usuarios = select_usuarios();

if (empty($_POST['email']) || empty($_POST['senha'])) {
    header("Location: Login.php?error=faltando_dados&email=" . $_POST['email'] . "&senha=" . $_POST['senha']);
    exit;
}

$email = $_POST['email'];
$senha = $_POST['senha'];
$achou = false;

foreach ($usuarios as $u):
    error_log("Entrou no for");
    error_log("Comparando:");
    error_log("Email_form: " . $email . "#");
    error_log("Email_bd:   " . $u['email'] . "#");
    error_log("Senha_form: " . $senha . "#");
    error_log("Senha_bd:   " . $u['senha'] . "#");


    if ($email == $u['email'] && $senha == $u['senha']) {
        error_log("Entrou no if");
        //$_SESSION['usuario_logado'] = $u;
        $achou = true;
        header("Location: ListaCadastro.php?");
        exit;
    }

endforeach;

if ($achou == false) {
    header("Location: Login.php?error=Dados_incorretos&email=" . $email."&senha=".$senha);
    exit;
}

?>