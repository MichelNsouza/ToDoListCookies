
<?php include './controller/processamento.php' ?>
<?php include './view/html/head.php' ?>
<link href="./assets/style.css" rel="stylesheet">
    <title>ToDo List</title>
</head>
<body>

  <?php include './view/component/navbar.php' ?>

  <div class="container-md mt-5">

    <h2 class="text-primary mb-4">Tarefas Cadastradas</h2>

     <?php include './view/component/alert.php' ?>

    <div class="row border-bottom secondary-subtle mt-2">
        <div class="col fw-bold">
          #
        </div>
        <div class="col fw-bold">
          Tarefa
        </div>
        <div class="col fw-bold">
          Data
        </div>
        <div class="col fw-bold">
          Ação
        </div>
    </div>

    <?php foreach($_SESSION['todasTarefas'] as $tarefa): ?>
      <div class="row border-bottom secondary-subtle  mt-2">  
          <div class="col fw-bold"><?=$tarefa["id"];?></div>
          <div class="col"><?=$tarefa["tarefa"];?></div>
          <div class="col"><?=$tarefa["data"];?></div>
          <div class="col">
            <form method="POST" action="" style="display:inline;">
              <input type="hidden" name="acao" value="excluir">
              <input type="hidden" name="id" value="<?=$tarefa["id"];?>">
              <button class="btn btn-danger"type="submit">Excluir</button>
             </form>
          </div>
      </div>
    <?php endforeach; ?>

  </div>

  <?php include './view/component/footer.php' ?>
  <?php include './view/html/foot.php' ?>