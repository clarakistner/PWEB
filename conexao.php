<?php

    function connecta_bd(){
        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $dbname = "webti";

        return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }

    function cadastra_usuario($email, $nome, $login, $senha){
        $con = connecta_bd();
        $stmt = $con->prepare("INSERT INTO usuarios (email, nome, login, senha)
                                VALUES (:email, :nome, :login, :senha)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':senha', $senha);
        return $stmt->execute();

    }
?>
