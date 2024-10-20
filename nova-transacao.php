<h1>Nova Transação</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">
      <label>Valor</label>
      <input type="number" name="valor" class="form-control">
    </div>

    <div class="mb-3">
      <label>Tipo de Transação</label>
      <input type="text" name="tipo" class="form-control">
    </div>
    
    <div class="mb-3">
      <label>Despesa/Lucro</label>
      <input type="text" name="despesa_receita" class="form-control">
    </div>
    
    
    <div class="mb-3">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>



  </form>