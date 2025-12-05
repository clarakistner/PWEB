<?php

    function connecta_bd(){
        $servername = "localhost:3306";
        $username = "root";
        $password = "NovaSenha!2025";
        $dbname = "cadastro";

        return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }

function cadastra_usuario($email, $nome, $senha, $telefone, $dataNascimento){
    $con = connecta_bd();
    $stmt = $con->prepare("INSERT INTO usuarios (email, nome, senha, telefone, dataNascimento)
                            VALUES (:email, :nome, :senha, :telefone, :dataNascimento)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':dataNascimento', $dataNascimento);
    return $stmt->execute();
}    

//cadastra_usuario('clarabkistner@gmail.com','Clara Kistner','12345','4799999999','2004-05-21');
//Funciona

?>