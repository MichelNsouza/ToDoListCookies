<?php
require_once(__DIR__ . '/validacao.php');
function adicionarTarefa($titulo, $data) {
    if (!validacao($titulo, $data)) {
        return;
    }

    $id = count($_SESSION['todasTarefas']) + 1;
    $tarefa = [
        "id" => $id,
        "tarefa" => $titulo,
        "data" => $data,
    ];

    $_SESSION['todasTarefas'][] = $tarefa;
    $_SESSION['alert_message'] = '<p><strong>Uhu</strong></p> <p>Tarefa cadastrada com sucesso!</p>';
    $_SESSION['alert_type'] = 'success';
}

function excluirTarefa($id) {
    foreach ($_SESSION['todasTarefas'] as $key => $tarefa) {
        if ($tarefa['id'] === $id) {
            unset($_SESSION['todasTarefas'][$key]);
            $_SESSION['todasTarefas'] = array_values($_SESSION['todasTarefas']);
            $_SESSION['alert_message'] = '<p>Tarefa excluída com sucesso!</p>';
            $_SESSION['alert_type'] = 'danger';
            return;
        }
    }
    $_SESSION['alert_message'] = '<p><strong>Erro!</strong></p> <p>Tarefa não encontrada!</p>';
    $_SESSION['alert_type'] = 'danger';
}
