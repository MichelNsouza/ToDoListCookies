<?php

$baseDir = dirname(__DIR__);

require_once $baseDir . '/controller/processamento.php';
require_once $baseDir . '/routes/routes.php';

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="/../assets/css/style.css" rel="stylesheet">
    <title>ToDo List</title>
</head>

<body>

    <?php include $baseDir . '/view/component/navbar.php'; ?>

    <div class="container-md mt-5">

        <?php include $baseDir . "/view/{$paginaAtual}" ?>

    </div>

    <?php include $baseDir . '/view/component/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>