    <h2 class="text-primary mb-4">Nova Tarefa</h2>

    <?php include $baseDir . '/view/component/alert.php' ?>

    <form method="post" action="../controller/processamento.php">
      <div class="mb-3">
        <label for="titulo" class="form-label">Titulo da tarefa</label>
        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Ex.: Comprar leite" required>
      </div>
      <div class="mb-3">
        <label for="data" class="form-label">Data da tarefa</label>
        <input type="date" class="form-control" name="data" id="data" required>
      </div>
      <div class="mb-3">
        <input type="hidden" name="acao" value="adicionar">
        <button type="submit" class="btn btn-primary">Cadastrar Tarefa</button>
      </div>
      </div>
    </form>