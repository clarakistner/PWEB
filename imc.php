<?php

if (!isset($_POST['peso']) || !isset($_POST['altura'])) {
    header("Location: formulario.php?error=valores_indefinidos");
    exit();
}

$peso = $_POST['peso'];
$altura = $_POST['altura'];

if (!is_numeric($peso) || !is_numeric($altura) || $altura <= 0) {
    header("Location: formulario.php?error=valores_invalidos");
    exit(); 
}

$imc = $peso / ($altura * $altura);


?>
