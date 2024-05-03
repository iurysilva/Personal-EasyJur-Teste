<?php
include "connection.php";

class RepositoryTarefa{
    function adicionaTarefa($connection, $nome, $descricao, $estado){
        if ($estado == "Concluído") $sql = "INSERT INTO `tarefa`(`nome`, `descricao`, `data_conclusao`, `estado`) VALUES ('$nome', '$descricao', NOW(), '$estado')";
        else $sql = "INSERT INTO `tarefa`(`nome`, `descricao`, `estado`) VALUES ('$nome', '$descricao', '$estado')";

        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));;
        if ($result) echo json_encode($result);
        else echo "Erro: " . mysqli_error($connection); 
    }

    function getTarefas($connection){
        $sql =  "SELECT * FROM `tarefa`";

        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

        while ($rows = mysqli_fetch_assoc($result)) {
            $dados[] = array('id' => $rows['id'],
                             'nome' => $rows['nome'],
                             'descricao' => $rows['descricao'],
                             'data_criacao' => $rows['data_criacao'],
                             'data_conclusao' => $rows['data_conclusao'],
                             'estado' => $rows['estado']);
        }    
        echo json_encode($dados);
    }

    function getTarefasById($connection, $id){
        $sql =  "SELECT * FROM tarefa WHERE id='".$id."'";

        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

        $row = mysqli_fetch_assoc($result);
        $dados = array('id' => $row['id'],
                            'nome' => $row['nome'],
                            'descricao' => $row['descricao'],
                            'data_criacao' => $row['data_criacao'],
                            'data_conclusao' => $row['data_conclusao'],
                            'estado' => $row['estado']);
        echo json_encode($dados);
    }

    function deletaTarefa($connection, $id){
        $sql =  "DELETE FROM tarefa WHERE id='".$id."'";
        $result = mysqli_query($connection, $sql);
     
        if ($result) echo json_encode($result);
        else echo "Erro: " . mysqli_error($connection); 
    }

    function editaTarefa($connection, $id, $nome, $descricao, $estado){
        $sql =  "UPDATE tarefa SET nome='".$nome."', descricao='".$descricao."', estado='".$estado."' WHERE id='".$id."'";
        $result = mysqli_query($connection, $sql);
     
        if ($result) echo json_encode($sql);
        else echo "Erro: " . mysqli_error($connection); 
    }
}
?>