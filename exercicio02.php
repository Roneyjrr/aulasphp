<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Exercício corrigido</h1>
        <hr><br>
        <?php
        // Entrada de dados, informação do salário
        $salario = 200;

        //Análise das condições,e cálculos 
        if ($salario < 500) {
            $novoSalario = $salario * 1.15;
        } elseif ($salario <= 1000) {
            $novoSalario = $salario * 1.10;
        } else {
            $novoSalario = $salario * 1.05;
        }
        ?>
        
        <p>Salário antigo: <?=$salario?></p>
        <p>Salário reajustado: <?=$novoSalario?></p>
        <hr>
        <p>Salário antigo: R$
        <?=number_format($salario, 2, ",", ".")?>
        </p>
        <p>Novo salário: 
            <?=number_format($novoSalario,2, ",", ".")?>
        </p>

    </div>

</body>

</html>