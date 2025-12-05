<?php   
    session_start();

    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $valid_username = "admin";
        $valid_password = "1234";

        if ($username === $valid_username && $password === $valid_password) {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            header("Location: pagina3.php");
            exit();
        } else {
            session_abort();
            echo "Usuário ou senha inválidos.";
        }
    }
?>