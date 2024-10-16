<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão HTML e PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1>Revisando o básico</h1>
    <hr>

    <?php
    const NOME = "Chapolin Colorado";
    $idade = 25;

    // Exibir a frase "Olá meu nome é Chapolin Colorado e tenho 25 anos." O nome deve aparecer em itálico e com cor diferente no texto, e a idade deve aparecer apenas com cor de fundo diferente.
    ?>

    <p>Olá meu nome é <i class="text-danger"><?= NOME ?></i> e tenho <span class="text-bg-primary"><?= $idade ?></span> anos.</p>

    <p class=""></p>
</body>

</html>