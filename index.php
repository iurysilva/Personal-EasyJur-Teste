<!DOCTYPE html>
<html lang="en">
<?php
include './modais/view-add-user.php';
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

  <title>TESTE EASYJUR</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3" style="background-color: #1e1f21; color: white; margin: 0; height: 80px; border-radius:0">
    TESTE EASYJUR
  </nav>

  <div style="background-color: black; width: 100%; height: 100vh; display: flex; padding-top:100px">  
    <div class="container" style="width: 25%; background-color: white; height: 500px; display: flex; flex-direction: column; align-items: center">
        <form style="width: 80%">
            <div>
                <div style="width: 100%; font-size: 30px; margin-top: 70px; display: flex; flex-direction: column; align-items: center">
                  Faça seu login
                </div>

                <div style="width: 100%; margin-top: 40px">
                  <label for="usuario" class="form-label" style="font-size: 20px">Usuário</label>
                  <input id="usuario" type="text" class="form-control" name="usuario" placeholder="">
                </div>

                <div style="width: 100%; margin-top: 20px">
                  <label for="senha" class="form-label" style="font-size: 20px">Senha</label>
                  <input id="senha" type="password" class="form-control" name="senha" placeholder="">
                </div>
            </div>
          </form>
          <button id="login-button" style="margin-top: 20px; background-color: #ffc709; border:none; width: 80%; font-size: 20px"> Entrar </button>
          <div style="width: 100%; font-size: 20px; margin-top: 15px; display: flex; flex-direction: column; align-items: center">
                  Ou
          </div>
          <button id="register-button" data-toggle="modal" data-target="#modalAdicionarUsuario" style="margin-top: 15px; background-color: #ffc709; border:none; width: 50%; font-size: 20px"> Cadastre-se </button>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#login-button').click(function(){
        let dados = {usuario:$("#usuario").val(),
                     senha:$("#senha").val()}
            $.post("./backend/controllers/controller-login.php", dados, function(result, status){
               if (result){
                var currentDate = new Date();
                currentDate.setMinutes(currentDate.getMinutes()+60);
                localStorage.setItem("auth-expiration", currentDate);
                $url = "./pages/page-home.php"
                window.location = $url;
               }
               else alert("Credenciais inválidas!")
            } )
      });
    });
  </script>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>