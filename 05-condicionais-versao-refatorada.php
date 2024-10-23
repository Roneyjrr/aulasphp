<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais em PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <h1>Comandos condicionais no PHP</h1>
        <hr>
        <h2>Condicional SIMPLES</h2>

        <?php
        $numero = 500;
        if ($numero >= 100) {
        ?>

            <p>O valor da variável é <?= $numero ?></p>

        <?php
        }
        ?>

        <hr>
        <h2>Condicinal COMPOSTA</h2>
        <?php
        // Controle de Estoque
        $produto = "Ultrabook";
        $qtdEmEstoque = 5;
        $qtdCritica = 2;

        ?>
        <h4>Produto <?= $produto ?></h4>
        <p><b>Estoque:</b> <?= $qtdEmEstoque ?></p>

        <?php
            // Se a Quantidade em estoque for menor que a crítica o sistema deve avisar e pedir pra repor.
        if ($qtdEmEstoque < $qtdCritica) {
        ?>

            <p class='alert alert-danger'>É necessário repor.</p>

        <?php
        } else {
        ?>

            <!--  Caso contrário simplismente avisar que o estoque está normal -->
            <p class='alert alert-success'>Estoque normal.</p>

        <?php
        }
        ?>

        <hr>
        <h2>Condicional Encadeada</h2>
        <?php
        if ($produto == "Ultrabook") {
            $garantia = 5;
        } elseif ($produto == "Geladeira") {
            $garantia = 3;
        } elseif ($produto == "TV") {
            $garantia = 2;
        } else {
            $garantia = 1;
        }
        ?>

        <p><?= $produto ?> tem garantia de <b><?= $garantia ?> anos.</b></p>
        <hr>
        <h2>Condicinal ENCADEADA usando Swith/Case</h2>
        
        <?php
        switch ($produto) {
            case "Ultrabook":
                $garantiaB = 5;
                break;
            case "Geladeira":
                $garantiaB = 3;
                break;
            case "TV":
                $garantiaB = 2;
                break;
            default:
                $garantiaB = 1;
                break;
        }
        ?>
        <p>Garantia de <?= $garantiaB ?> anos</p>

    </div>
</body>

</html>