<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops no php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Loops (ou laços de repetição)</h1>
        <hr>
        <h2>Tradicionais: While, for, do/while</h2>
        <?php
        // Variável de controle da repetição
        $i = 1;
        while ($i <= 3) {
        ?>
            <p>Senac Penha - <?= $i ?></p>
        <?php
            // Atualizando/incrementando a variável
            $i++;
        }
        ?>

        <h3>for</h3>
        <?php
        for ($i = 1; $i <= 5; $i++) {
        ?>
            <div>
                <h4>Foto <?= $i ?></h4>
                <img src="https://picsum.photos/id/1/300/200" alt="">
            </div>
        <?php
        }
        ?>
        <h3>Loops para acessar Arrays</h3>
        <?php
        $alunos = ["Roney", "Adriano", "Maria", "Silas"];
        for($i=0; $i<count($alunos); $i++){
        ?>
            <p class="alert alert-success">
                <?=$alunos[$i]?>
            </p>
        <?php
        }
        ?>


        <hr>
        <h2>Específicos: Foreach</h2>
        <?php
        foreach($alunos as $aluno){
        ?>
        <p class="alert alert-danger"><?=$aluno?></p>

        <?php
        }
        ?>




    </div>
</body>

</html>