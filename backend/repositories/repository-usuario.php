<?php
include "connection.php";

class RepositoryUsuario{
    function adicionaUsuario($connection, $nome, $email, $telefone, $senha){
        $hash = password_hash($senha, PASSWORD_DEFAULT); 
        $sql = "INSERT INTO `usuario`(`nome`, `telefone`, `email`, `senha`) VALUES ('$nome','$email','$telefone','$hash')";

        $result = mysqli_query($connection, $sql);
        if ($result) echo json_encode($result);
        else echo "Erro: " . mysqli_error($connection); 
    }

    function getSenhaUsuario($connection, $usuario){
        $sql =  "SELECT * FROM usuario WHERE nome='".$usuario."'";

        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
        $row = mysqli_fetch_assoc($result);
        return $row["senha"];
    }
}
?>