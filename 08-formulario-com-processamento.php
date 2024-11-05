<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com PHP</title>
</head>

<body>
    <h1>Formulário e Processamento juntos</h1>
    <hr>
    <?php
    // Se o botão continuar foi acionado
    if (isset($_POST['continuar'])) {
        $nome = $_POST['nome'];
    ?>
        <h2>Bem-Vindo <?= $nome ?> :)</h2>
    <?php
    } else {
    ?>

        <form action="" method="post" autocomplete="off">
            <!-- o action tem que estar vazio ao programar PHP junto com o formulário -->
            <label for="nome">Qual seu nome?</label>
            <input required type="text" name="nome" id="nome">
            <button name="continuar" type="submit">Continuar</button>
        </form>
    <?php
    }
    ?>
</body>

</html>