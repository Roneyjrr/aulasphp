<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Correção do exercício</h1>
        <hr>

        <?php
        // Array NUMÉRICO/INDEXADO
        $dados1 = [
            "Chapolim-Colorado",
            "123teste",
            30,
            "São Paulo",
            [
                "11-3266000",
                "11-912345678"
            ]
        ];

        // Array ASSOSSIATIVO
        $dados2 = [
            "usuario" => "Chapolim-Colorado",
            "senha" => "123teste",
            "idade" => 30,
            "cidade" => "São Paulo",
            "telefones" =>  ["11-3266000", "11-912345678"]
        ]
        ?>


        <h2>Versão de saída usando array NUMÉRICO/INDEXADO</h2>
        <br>
        <hr>
        <ol>
            <li>Nome: <?= $dados1["0"] ?></li>
            <li>Idade: <?= $dados1["2"] ?> anos</li>
            <li>Cidade: <?= $dados1["3"] ?></li>
            <li>Telefone: <?= $dados1[4][1] ?></li>
        </ol>


        <h2>Versão de saída usando array </h2>
        <br>
        <hr>
        <ol>
            <li>Nome: <?= $dados2["usuario"] ?></li>
            <li>Idade: <?= $dados2["idade"] ?> anos</li>
            <li>Cidade: <?= $dados2["cidade"] ?></li>
            <li>Telefone: <?= $dados2["telefones"][1] ?></li>
        </ol>
    </div>
</body>

</html>