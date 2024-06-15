<h2 class="text-primary mb-4">Tarefas Cadastradas</h2>

<?php include $baseDir . '/view/component/alert.php'; ?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tarefa</th>
            <th scope="col">Data</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>

    <?php if (isset($_SESSION['todasTarefas']) && is_array($_SESSION['todasTarefas'])) : ?>
        <?php foreach ($_SESSION['todasTarefas'] as $tarefa) : ?>
            <tbody>
                <tr>
                    <th scope="row"><?= $tarefa["id"]; ?></th>
                    <td><?= $tarefa["tarefa"]; ?></td>
                    <td><?= $tarefa["data"]; ?></td>
                    <td>
                        <form method="POST" action="" style="display:inline;">
                            <input type="hidden" name="acao" value="excluir">
                            <input type="hidden" name="id" value="<?= $tarefa["id"]; ?>">
                            <button class="btn btn-danger" type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            </tbody>
</table>
<?php endforeach; ?>
<?php endif; ?>