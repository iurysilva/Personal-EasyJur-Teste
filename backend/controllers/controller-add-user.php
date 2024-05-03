<?php
include "../repositories/repository-usuario.php";
include "../repositories/connection.php";

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];


$repository = new RepositoryUsuario();
$result = $repository->adicionaUsuario($connection, $nome, $email, $telefone, $senha);
echo $result
?>