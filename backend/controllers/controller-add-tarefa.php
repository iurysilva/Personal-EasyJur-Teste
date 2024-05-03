<?php
include "../repositories/repository-tarefa.php";
include "../repositories/connection.php";

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$estado = $_POST['estado'] === null ? "Pendente" : $_POST['estado'];

$repository = new RepositoryTarefa();
$result = $repository->adicionaTarefa($connection, $nome, $descricao, $estado);
echo $result
?>