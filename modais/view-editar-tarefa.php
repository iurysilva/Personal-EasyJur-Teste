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
<div id="modalEditarTarefa" name="modalEditarTarefa" class="modal fade" role="dialog">
  <input id="editarId" name="editarId" type="text" class="form-control" hidden>
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="width:30vw; min-width:200px;">
      <div class="modal-header">
        <h4 class="modal-title">Editar tarefa</h4>
      </div>
      <div class="modal-body">    
            <form>
            <div class="row mb-2" style="margin-left:1%">
               <div class="row" style="width: 100%">
                  <label for="editarNome" class="form-label">Nome:</label>
                  <input id="editarNome" type="text" class="form-control" name="editarNome" placeholder="">
               </div>

               <div class="row" style="width: 100%">
                  <label for="editarDescricao" class="form-label">Descrição:</label>
                  <input id="editarDescricao" type="text" class="form-control" name="editarDescricao" placeholder="">
               </div>
            </div>

            <div class="form-group  mb-3">
               <label>Estado:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="editarEstado" id="pendente" value="Pendente">
               <label for="pendente" class="form-input-label">Pendente</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="editarEstado" id="concluido" value="Concluído">
               <label for="concluido" class="form-input-label">Concluído</label>
            </div>
            
            <button id="submit-button-editar" class="btn btn-success"> Salvar </button>
            <button id="close-button-editar" class="btn btn-danger" data-dismiss="modal">Fechar</button>

            </form>
      </div>
   </div>
    </div>

  </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#submit-button-editar").click((e)=>{
            e.preventDefault();
            let dados = {id:$("#editarId").val(),
                        nome:$("#editarNome").val(),
                        descricao:$("#editarDescricao").val(),
                        estado: $('input[name=editarEstado]:checked').val()}
            $.post("../backend/controllers/controller-edita-tarefa.php", dados, function(result, status){
                if (result){
                    alert("Tarefa atualizada com sucesso")
                }
                else alert("Erro ao atualizar tarefa")
                atualizaTabelaTarefas();
            })
        })

        $('#modalEditarTarefa').on('show.bs.modal', function(e) {
            var tarefaId = $(e.relatedTarget).attr("name");
            let dados = {id:tarefaId}
            $.get("../backend/controllers/controller-get-tarefas.php", dados, function(result, status){
                var tarefa = JSON.parse(result);
                $(e.currentTarget).find('input[name="editarId"]').val(tarefa.id);
                $(e.currentTarget).find('input[name="editarNome"]').val(tarefa.nome);
                $(e.currentTarget).find('input[name="editarDescricao"]').val(tarefa.descricao);
                if (tarefa.estado === "Concluído") $('input:radio[name="editarEstado"]').filter('[value="Concluído"]').attr('checked', true);
                else $('input:radio[name="editarEstado"]').filter('[value="Pendente"]').attr('checked', true);
            })
        });
    });
</script>

</body>

</html>