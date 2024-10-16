<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1>Variáveis e Constantes</h1>
    <hr>
    <h2>Declaração e saída usando echo</h2>

    <?php
    // Variáveis
    $curso = "Programador Web";
    $ano = 2024;
    $area = "Back-End";

    // Estamos no Programador Web em 2024.

    // Saída interpolada (usando aspas duplas)
    echo "<p>Estamos no $curso em $ano.</p>";

    // Com aspas simples, PHP NÃO interpreta variável
    echo '<p>Estamos no $curso em $ano.</p>';

    // Constantes
    define("AUTOR", "Fulano"); // tradicional, antiga
    const EMPRESA = "ABC Tecnologia"; // nova, moderna

    // Fulano trabalha na empresa ABC Tecnologia
    // (usando concatenação [ponto final])
    echo "<p>" . AUTOR . " trabalha na empresa " . EMPRESA . "</p>";
    ?>

    <h2>Saída de dados simplificada/direta</h2>

    <p>
        Estamos no
        <span class="text-bg-danger"><?= $curso ?></span>
        em
        <span class="text-bg-primary"><?= $ano ?></span>.
    </p>

    <p> <?= AUTOR ?> trabalha na empresa <?= EMPRESA ?></p>
</body>

</html>