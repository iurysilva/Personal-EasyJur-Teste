<!DOCTYPE html>
<html lang="en">

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
  <nav class="navbar navbar-light justify-content-center fs-3" style="background-color: #1e1f21; color: white; margin: 0">
    TESTE EASYJUR
  </nav>

  <div style="background-color: black; width: 100%; height: 100vh; display: flex; padding-top:100px">  
    <div class="container" style="background-color: white; height: 500px; display: flex; flex-direction: column; align-items: center">
        <form id="">
            <div>
                <div class="row" style="width: 100%">
                  <label for="nome" class="form-label" style="font-size: 30px">Usuário</label>
                  <input id="nome" type="text" class="form-control" name="nome" placeholder="">
                </div>

                <div class="row" style="width: 30%">
                  <label for="descricao" class="form-label">Senha</label>
                  <input id="descricao" type="text" class="form-control" name="descricao" placeholder="">
                </div>
            </div>
          </form>
          <button id="submit-button"> Entrar </button>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#submit-button').click(function(){
          $url = "./pages/page-tarefas.php"
          window.location = $url;
      });
    });
  </script>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>