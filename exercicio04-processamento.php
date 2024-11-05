<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 (Dados)</title>
</head>
<body>
<h1>Exercício 04 (dados/processamento)</h1>
<hr>

<!-- Faça a partir daqui a programação
necessária para obter os dados vindos do formulário
e mostrá-los usando elementos HTML (da forma que você quiser). -->

<?php
    $produto = $_POST["produto"];
    $fabricante = $_POST["fabricante"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    ?>
     <h2>Dados Recebidos</h2>
        <ul>
            <li>Produto: <?= $produto ?></li>
            <li>Fabricante: <?= $fabricante ?></li>
            <li>Preço: <?=number_format($preco, 2, ",", ".") ?></li>
            <li>Descrição: <?= $descricao ?></li>




</body>
</html>