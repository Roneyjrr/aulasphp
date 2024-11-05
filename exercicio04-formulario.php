<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 (formulário)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="mb-3">
            <h1>Exercício 04 (formulário)</h1>
            <hr>
            <form autocomplete="off" action="exercicio04-processamento.php" method="post">
                <p>
                    <label for="produto" class="form-label">Produto:</label>
                    <input required type="text" class="form-control" name="produto" id="produto">
                </p>

                <p>
                    <label for="fabricante" class="form-label">Fabricante:</label>
                    <select name="fabricante" id="fabricante">
                        <!-- não apague este <option> vazio -->
                        <option value=""></option>

                        <!-- Faça aqui a programação necessária para obter os dados de um array (criado por você) e colocá-los (cada um) dentro de uma tag <option>. -->


                        <?php
                        $fabricantes = ["HP", "Microsoft", "Samsung", "LG"];
                        for ($i = 0; $i < count($fabricantes); $i++) {
                        ?>
                            <option><?= $fabricantes[$i] ?></option>
                        <?php
                        }
                        ?>

                    </select>
                </p>

                <p>
                    <label for="preco" class="form-label">Preço:</label>
                    <input required type="number" class="form-control" name="preco" id="preco" min="100" max="10000" step="0.01">
                </p>

                <p>
                    <label for="descricao" class="form-label">Descrição:</label><br>
                    <textarea name="descricao" class="form-control" id="descricao" cols="30" rows="6"></textarea>
                </p>

                <button type="submit" name="enviar">Enviar dados</button>
            </form>
        </div>
    </div>
</body>

</html>