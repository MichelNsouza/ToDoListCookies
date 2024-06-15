<?php

$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/index':
        $paginaAtual = '/index.php';
        break;

    case '/create':
        $paginaAtual = '/create.php';
        break;

    default:
        $paginaAtual = '/404.php';
}
