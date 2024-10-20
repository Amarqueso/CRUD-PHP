<h1>Alterar Transação</h1>
<?php
    $sql = "SELECT * FROM transacao WHERE id=" . $_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="alterar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    
    <div class="mb-3">
        <label>Valor</label>
        <input type="number" name="valor" value="<?php echo $row->valor; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Tipo de Transação</label>
        <input type="text" name="tipo" value="<?php print $row->tipo; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Despesa/Lucro</label>
        <input type="text" name="despesa_receita" value="<?php print $row->despesa_receita; ?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
