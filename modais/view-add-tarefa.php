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
<div id="modalAdicionarTarefa" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="width:30vw; min-width:200px;">
      <div class="modal-header">
        <h4 class="modal-title">Adicionar tarefa</h4>
      </div>
      <div class="modal-body">    
            <form id="">
            <div class="row mb-2" style="margin-left:1%">
               <div class="row" style="width: 100%">
                  <label for="nome" class="form-label">Nome:</label>
                  <input id="nome" type="text" class="form-control" name="nome" placeholder="">
               </div>

               <div class="row" style="width: 100%">
                  <label for="descricao" class="form-label">Descrição:</label>
                  <input id="descricao" type="text" class="form-control" name="descricao" placeholder="">
               </div>
            </div>

            <div class="form-group  mb-3">
               <label>Estado:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="estado" id="pendente" value="Pendente">
               <label for="pendente" class="form-input-label">Pendente</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="estado" id="concluido" value="Concluído">
               <label for="concluido" class="form-input-label">Concluído</label>
            </div>
            
            <button id="submit-button" class="btn btn-success"> Salvar </button>
            <button id="close-button" class="btn btn-danger" data-dismiss="modal">Fechar</button>

            </form>
      </div>
   </div>
    </div>

  </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#submit-button").click((e)=>{
            e.preventDefault();
            let dados = {nome:$("#nome").val(),
                        descricao:$("#descricao").val(),
                        estado: $('input[name=estado]:checked').val()}
            $.post("../backend/controllers/controller-add-tarefa.php", dados, function(result, status){
               if (result) alert("Tarefa inserida com sucesso")
               else alert("Erro ao inserir tarefa")
                atualizaTabelaTarefas();
            } )
        })
    });
</script>

</body>

</html>