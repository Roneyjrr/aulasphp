# Exercício 4

## Etapa 01

Abra o arquivo **exercicio04-formulario.php** e analise sua estrutura.

Veja que existe um formulário com campos para para **simulação de cadastro** de produtos:

- Nome do produto (obrigatório) - `input text`
- Fabricante - `select/option`
- Preço (obrigatório) - `input number`
- Descrição - `textarea`
- Botão de enviar - `button submit`

### DESAFIO FABRICANTE

- Crie um array chamado `fabricantes`e coloque nele os nomes de 4 fabricantes: HP, Microsoft, Samsung e LG
- Usando o loop `foreach` para acessar o array `fabricantes`, faça cada `option` do `select` mostrar o nome de cada fabricante.

## Etapa 02

Abra o arquivo **exercicio04-processamento.php** e faça a programação PHP para receber os dados do formulário usando `POST`.

Mostre os dados recebidos usando tags HTML (livre escolha).

Se quiser, estilize com CSS ou Bootstrap.

### DESAFIO PREÇO

Faça o preço aparecer formatado em Reais.

Exemplo: se o preço digitado no formulário for **4500.75**, deverá aparecer no HTML como **R$ 4.500,75**.

