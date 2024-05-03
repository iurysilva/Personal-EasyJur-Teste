<?php
include("../repositories/repository-usuario.php");
include "../repositories/connection.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$repository = new RepositoryUsuario();
$result = $repository->getSenhaUsuario($connection, $usuario);
$verify = password_verify($senha, $result); 
echo $verify;
?>