<?php
include "../repositories/repository-tarefa.php";
include "../repositories/connection.php";

$id = $_GET['id'];
$repository = new RepositoryTarefa();

if ($id === null) $result = $repository->getTarefas($connection);
else $result = $repository->getTarefasById($connection, $id);

echo $result;
?>