<!DOCTYPE html>
<html lang="en">
<?php
include '../modais/view-add-tarefa.php';
include '../modais/view-editar-tarefa.php';
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="../scripts-js/atualiza-tabela-tarefas.js"></script>

    <style>
      html { visibility:hidden; }
    </style>

  <title>TESTE EASYJUR</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3" style="background-color: #1e1f21; color: white; margin: 0; height: 80px; border-radius:0">
    TESTE EASYJUR
  </nav>
  <div style="background-color: black; width: 100%; height: 100vh; display: flex; padding-top:100px">  
    <div class="container">
      <a class="btn btn-dark mb-3" style="margin-top: 15px" data-toggle="modal" data-target="#modalAdicionarTarefa">Adicionar tarefa</a>

      <table id="table" class="table table-hover text-center">
        <thead class="table-dark">
          <tr>
            <th class="text-center" scope="col">Nome</th>
            <th class="text-center" scope="col">Descrição</th>
            <th class="text-center" scope="col">Data de Criação</th>
            <th class="text-center" scope="col">Data de Modificação</th>
            <th class="text-center" scope="col">Status</th>
            <th class="text-center" scope="col"></th>
            <th class="text-center" scope="col"></th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>

      <script type="text/javascript">
        var value = localStorage.getItem("auth-expiration");
        var currentDate = new Date();
        var authDate = new Date(value);
        if (value === null || currentDate > authDate){
          $url = "../index.php"
          window.location = $url;
          alert("Você não está autorizado a acessar esse domínio")
        }

          $(document).ready(function(){
            document.getElementsByTagName("html")[0].style.visibility = "visible";
            atualizaTabelaTarefas()
          });
      </script>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>