<?php
session_start();

require_once(__DIR__ . '/tarefasController.php');

if (!isset($_SESSION['todasTarefas'])) {
    $_SESSION['todasTarefas'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $acao = isset($_POST['acao']) ? $_POST['acao'] : '';

    if ($acao === 'adicionar') {
        $titulo = isset($_POST['titulo']) ? trim($_POST['titulo']) : '';
        $data = isset($_POST['data']) ? trim($_POST['data']) : '';
        adicionarTarefa($titulo, $data);
        header('Location: /create');
    } elseif ($acao === 'excluir') {
        $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
        excluirTarefa($id);
        header('Location: /');
    }


    exit();
}
