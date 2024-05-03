<?php
include "../repositories/repository-tarefa.php";
include "../repositories/connection.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$estado = $_POST['estado'] === null ? "Pendente" : $_POST['estado'];

$repository = new RepositoryTarefa();
$result = $repository->editaTarefa($connection, $id, $nome, $descricao, $estado);
echo $result
?>