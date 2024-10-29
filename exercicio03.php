<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício03 Corrigido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        li:nth-child(odd) {
            color: blue;
        }
        li:nth-child(even) {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Exercício</h1>
        <hr>
        <ol>
            <?php
            $meses = ["Janeiro", "Fevereiro", "Março", "abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
            for ($i = 0; $i < count($meses); $i++) {
            ?>
                <li><?= $meses[$i] ?></li>
            <?php
            }
            ?>
        </ol>
    </div>
</html>