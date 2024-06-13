<?php
function validacao($titulo, $data) {
    if (empty($titulo)) {
        $_SESSION['alert_message'] = '<p>Ops!!!</p><p>A tarefa precisa de um título!</p>';
        $_SESSION['alert_type'] = 'warning';
        return false;
    }

    if (strlen($titulo) < 5) {
        $_SESSION['alert_message'] = '<p>Ops!!!</p><p>O título da tarefa deve ter pelo menos 5 caracteres!</p>';
        $_SESSION['alert_type'] = 'warning';
        return false;
    }

    if (empty($data)) {
        $_SESSION['alert_message'] = '<p>Ops!!!</p><p>A tarefa precisa de uma data!</p>';
        $_SESSION['alert_type'] = 'warning';
        return false;
    }
    $dataAtual = date('Y-m-d');
    if ($data < $dataAtual) {
        $_SESSION['alert_message'] = '<p>Ops!!!</p><p>A data da tarefa não pode estar no passado!</p>';
        $_SESSION['alert_type'] = 'warning';
        return false;
    }

    return true;
}
