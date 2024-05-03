<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <script src="../scripts-js/atualiza-tabela-tarefas.js"></script>

   <title>TESTE EASYJUR</title>
</head>

<body>
    <!-- Modal -->
<div id="modalAdicionarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="width:30vw; min-width:200px;">
      <div class="modal-header">
        <h4 class="modal-title">Registrar usuário</h4>
      </div>
      <div class="modal-body">    
            <form id="">
            <div class="row mb-2" style="margin-left:1%">
               <div class="row" style="width: 100%">
                  <label for="registrarNome" class="form-label">Nome:</label>
                  <input id="registrarNome" type="text" class="form-control" name="registrarNome" placeholder="">
               </div>

               <div class="row" style="width: 100%">
                  <label for="registrarEmail" class="form-label">Email:</label>
                  <input id="registrarEmail" type="email" class="form-control" name="registrarEmail" placeholder="">
               </div>

               <div class="row" style="width: 100%">
                  <label for="registrarTelefone" class="form-label">Telefone:</label>
                  <input id="registrarTelefone" type="text" class="form-control" name="registrarTelefone" placeholder="">
               </div>

               <div class="row" style="width: 100%">
                  <label for="registrarSenha" class="form-label">Senha:</label>
                  <input id="registrarSenha" type="password" class="form-control" name="registrarSenha" placeholder="">
               </div>
            </div>
            
            <button id="registrar-button" class="btn btn-success"> Registrar </button>
            <button id="close-registrar-button" class="btn btn-danger" data-dismiss="modal">Fechar</button>

            </form>
      </div>
   </div>
    </div>

  </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#registrar-button").click((e)=>{
            e.preventDefault();
            let dados = {nome:$("#registrarNome").val(),
                        email:$("#registrarEmail").val(),
                        telefone: $('#registrarTelefone').val(),
                        senha: $('#registrarSenha').val()}
            $.post("../backend/controllers/controller-add-user.php", dados, function(result, status){
                console.log(result);
                if (result) alert("Usuário cadastrado com sucesso")
                else alert("Erro ao cadastrar usuário")
                // if ($(e.relatedTarget).val() === "Registrar"){
                //     console.log("registrar")
                // }
            })
        })
    });
</script>

</body>

</html>