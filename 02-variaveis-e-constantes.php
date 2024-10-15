<!DOCTYPE html>
<html lang="pe-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
</head>
<body>
    <h1>Variáveis e Constantes</h1>
    <hr>
    <h2>Declaração e saída usando echo</h2>

    <?php
    $curso = "Programador Web";
    $ano = 2024;
    $area = "Back-End";

    echo "<p>Estamos no $curso em $ano</p>";

    // Constantes

    define("AUTOR","Roney"); 

    const EMPRESA = "ABC - Tech";
    echo "<p>" .AUTOR. " trabalha na empresa ".EMPRESA." </p>";
    ?>

    <h2>Saída de dados simplificado</h2>

    <p class="alert alert-success">
        Estamos no <span class="text-bg-danger"><?=$curso?></span> em <span class="text-bg-primary"><?=$ano?>.</span></p>

    <p> <?=AUTOR?> trabalha na empresa <?=EMPRESA ?></p>


</body>   
</html>
