<?php

$baseDir = dirname(__DIR__);

include $baseDir . '/controller/processamento.php';
include $baseDir . '/view/html/head.php';
?>
<link href="/api/assets/css/style.css" rel="stylesheet">
<title>ToDo List</title>
</head>
<body>

<?php include $baseDir . '/view/component/navbar.php'; ?>

<div class="container-md mt-5">
    <h2 class="text-primary mb-4">Tarefas Cadastradas</h2>

    <?php include $baseDir . '/view/component/alert.php'; ?>

    <div class="row border-bottom secondary-subtle mt-2">
        <div class="col fw-bold">#</div>
        <div class="col fw-bold">Tarefa</div>
        <div class="col fw-bold">Data</div>
        <div class="col fw-bold">Ação</div>
    </div>

    <?php if (isset($_SESSION['todasTarefas']) && is_array($_SESSION['todasTarefas'])): ?>
        <?php foreach($_SESSION['todasTarefas'] as $tarefa): ?>
        <div class="row border-bottom secondary-subtle mt-2">
            <div class="col fw-bold"><?=$tarefa["id"];?></div>
            <div class="col"><?=$tarefa["tarefa"];?></div>
            <div class="col"><?=$tarefa["data"];?></div>
            <div class="col">
                <form method="POST" action="" style="display:inline;">
                    <input type="hidden" name="acao" value="excluir">
                    <input type="hidden" name="id" value="<?=$tarefa["id"];?>">
                    <button class="btn btn-danger" type="submit">Excluir</button>
                </form>
            </div>
        </div>
        <?php endforeach; ?>
    <?php endif; ?>

</div>

<?php include $baseDir . '/view/component/footer.php'; ?>
<?php include $baseDir . '/view/html/foot.php'; ?>
