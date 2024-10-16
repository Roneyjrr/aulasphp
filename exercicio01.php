<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>

<body>
    <?php
    $dados = [
        "nome" => "Chapolin Colorado",
        "senha" => "123teste",
        "idade" => 30,
        "cidade" => "São Paulo",
        "telefone" => ["1121350300", "11912345678"]
    ];
    ?>
    <h2>Exercício</h2>
    <hr>
    <ol>
        <li>Nome: <?= $dados["nome"] ?></li>
        <li>Senha: <?= $dados["senha"] ?></li>
        <li>Idade: <?= $dados["idade"] ?></li>
        <li>Cidade: <?= $dados["cidade"] ?></li>
        <li>Telefone: <?= $dados["telefone"[]] ?></li>
    </ol>
</body>

</html>