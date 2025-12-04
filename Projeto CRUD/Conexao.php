<?php

function connecta_bd(){
        $servername = "localhost:3306";
        $username = "root";
        $password = "NovaSenha!2025";
        $dbname = "projetoweb";

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

//cadastra_usuario("natanjvansuita@gmail.com", "Natan Vansuita", "natan", "99953-1753", "2007-02-10");
//CORRETO

function delete_usuario($id){
    $con = connecta_bd();
    $stmt = $con -> prepare ("DELETE FROM usuarios WHERE id = :id");
    $stmt ->bindParam(':id', $id);
    return $stmt->execute();
}

//delete_usuario("40");
//CORRETO

function update_usuario($id, $email, $nome, $telefone){
    $con = connecta_bd();
    $stmt = $con->prepare("UPDATE usuarios
                            SET email = :email, nome = :nome, telefone = :telefone
                            WHERE id = :id");
    $stmt ->bindParam(':id', $id);                       
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':telefone', $telefone);
    return $stmt->execute();
}
//update_usuario("41", "clarabkistner@gmail.com", "Clara Bianca Kistner", "99953-1753");
//CORRETO

function select_usuario($id){
    $con = connecta_bd();
    $stmt = $con -> prepare ("SELECT * FROM usuarios WHERE id = :id");
    $stmt ->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
//echo var_dump(select_usuario(41));
//select_usuario("41");
//CORRETO

function select_usuarios(){
    $con = connecta_bd();
    $stmt = $con ->prepare ("SELECT * FROM usuarios");
    $stmt ->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
//CORRETO


?>