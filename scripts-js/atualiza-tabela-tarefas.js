function atualizaTabelaTarefas(){
    $(".table").load("../pages/page-tarefas.php" + " .table");
    $.get("../backend/controllers/controller-get-tarefas.php", function(result, status){
        $.each(JSON.parse(result), function(idx, elem){
            const data_conclusao = elem.data_conclusao === null ? "Não se aplica" : elem.data_conclusao;

            var deleteButton = $(`<tr><td><button name=${elem.id} class="fa fa-trash"></button></td></tr>`).find('button').click(function () {
                let dados = {id:this.name}
                console.log(this.name)
                $.post("../backend/controllers/controller-deleta-tarefa.php", dados, function(result, status){
                    if (result) alert("Tarefa deletada com sucesso")
                    else alert("Erro ao deletar tarefa")
                     atualizaTabelaTarefas();
                 } )
            });

            var updateButton = $(`<tr><td><button name=${elem.id} class="fa-solid fa-pen" data-toggle="modal" data-target="#modalEditarTarefa"></button></td></tr>`)

            $(".table tbody").append("<tr><td>"+elem.nome+
                        "</td><td>"+elem.descricao+
                        "</td><td>"+elem.data_criacao+
                        "</td><td>"+data_conclusao+
                        "</td><td>"+elem.estado+"</td></tr>");
            $(".table tr:last").append('<td></td>').find("td:last").append(deleteButton);
            $(".table tr:last").append('<td></td>').find("td:last").append(updateButton);
        } )
    })
}
