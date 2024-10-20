<h1>Deletar Transações</h1>

<?php
    $sql = "SELECT * FROM transacao";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table table-hover table-bordered'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Valor</th>";
        print "<th>Tipo da Transação</th>";
        print "<th>Despesa ou Receita</th>";
        print "<th>Ações</th>";
        print "</tr>"; // Corrigido para fechar a linha de cabeçalho corretamente
        
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->valor."</td>";
            print "<td>".$row->tipo."</td>";
            print "<td>".$row->despesa_receita."</td>";
            print "<td>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=deletar&id=".$row->id."';} else {false;}\" class='btn btn-danger'>Excluir</button>
            </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>
