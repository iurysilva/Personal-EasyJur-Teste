<?php
include "../repositories/repository-tarefa.php";
include "../repositories/connection.php";

$id = $_POST['id'];

$repository = new RepositoryTarefa();
$result = $repository->deletaTarefa($connection, $id);
echo $result
?>